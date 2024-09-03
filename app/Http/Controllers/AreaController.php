<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    //

    public function getData(Request $request){

        $rta= 10+20;
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $rta
        ]);

    }

    public function save(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $request->nombre,
        ]);

    }

    public function update(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito'
        ]);

    }

    public function response(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito'
        ]);

    }

    public function delete(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'se elimino con exito'
        ]);

    }
}
