<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuario;


class TipoUsuarioController extends Controller
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
        ]);

        $tipo_usuario = TipoUsuario::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $tipo_usuario,
        ]);

    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
    ]);

    $tipo_usuario = TipoUsuario::findOrFail($id);

    $tipo_usuario->update([
        'nombre' => $request->nombre,
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'Actualizado con éxito',
        'data' => $tipo_usuario,
    ]);

    }

    public function delete($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);

    }
}