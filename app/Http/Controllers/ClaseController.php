<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;

class ClaseController extends Controller
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

        $clase = Clase::create([
            'nombre' => $request->nombre,
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $clase,
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $clase = Clase::findOrFail($id);
        $clase->update([
            'nombre' => $request->nombre,
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
            'data' => $clase,
        ]);

    }

    public function delete($id)
    {
        $clase = Clase::findOrFail($id);
        $clase->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);

    }
}
