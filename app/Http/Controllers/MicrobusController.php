<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Microbus;


class MicrobusController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'placa'=> 'required',
            'nroInterno' => 'required',
            'fecha_asignacion' => 'required|date',
            'fecha_baja' => 'required|date',
            'conductor_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $microbus = Microbus::create(array_merge(
            $validator->validate(),
        ));

        return response()->json([
            'message' => 'Microbus creado',
            'microbus' => $microbus
        ], 401);
    }
}
