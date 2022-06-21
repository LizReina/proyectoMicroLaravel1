<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'fecha_nacimiento'=> 'required|date',
            'categoria_lic' => 'required',
            'foto' => 'required|string',
            'users_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $conductor = Conductor::create(array_merge(
            $validator->validate(),
        ));

        return response()->json([
            'message' => 'Conductor creado',
            'conductor' => $conductor
        ], 401);
    }
}
