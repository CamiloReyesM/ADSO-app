<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
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
            'salario' => 'nullable|numeric',
            'tipo_usuario_id' => 'required|exists:tipo_usuarios,id', // Verificar que el ID exista en la tabla 'cargos'
        ]);

        $cargo = Cargo::create([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'tipo_usuario_id' => $request->tipo_usuario_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $cargo,
        ]);

    }

    public function update(Request $request, $id)
{
    $cargo = Cargo::findOrFail($id);

    $request->validate([
        'nombre' => 'required|string|max:255',
        'salario' => 'nullable|numeric',
        'tipo_usuario_id' => 'required|exists:tipo_usuarios,id',
    ]);

    $cargo->update([
        'nombre' => $request->nombre,
        'salario' => $request->salario,
        'tipo_usuario_id' => $request->tipo_usuario_id,
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'actualizado con éxito',
        'data' => $cargo,
    ]);

    }

    public function response(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
            'data' => $cargo,
        ]);

    }

    public function delete($id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);

    }

}
