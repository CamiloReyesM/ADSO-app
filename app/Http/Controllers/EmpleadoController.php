<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function getData(Request $request)
    {
        $rta = 10 + 20;
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result' => $rta
        ]);

    }

    public function save(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cargo_id' => 'required|exists:cargos,id', // Verificar que el ID exista en la tabla 'cargos'
            'cc' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        $empleado = Empleado::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'cargo_id' => $request->cargo_id,
            'cc' => $request->cc,
            'telefono' => $request->telefono,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $empleado,
        ]);

    }

    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update([
            'nombre' => $request->nombre,
        ]);

    }

    public function response(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
            'data' => $empleado,
        ]);

    }

    public function delete($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);

    }

}
