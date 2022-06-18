<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;
use App\Models\Linea;
use App\Models\Coordenada;
use App\Models\Ruta;
use finfo;
use http\Env\Url;

class LineaController extends Controller
{
    public function getLineas() {
        $list = new Linea();
        $list = $list->getLineas();

        return response()->json($list);
    }

    public function getLineasRutas() {
        $rutas = new Ruta();
        $rutas = $rutas->getRutas();

        $lineas = new Linea();
        $lineas = $lineas->getLineas();



        $items = [];

        foreach ($rutas as $ruta) {
            $item = new \stdClass();
            $item->id = $ruta->id;
            $item->tipo = $ruta->tipo;
            foreach ($lineas as $linea) {
                if ($ruta->linea_id == $linea->id) {
                    $item->linea_id = $linea->id;
                    $item->nombre = $linea->nombre;
                }
            }
            $coordenadas = new Coordenada();
            $coordenadas = $coordenadas->getCoordenadasxLineas($ruta->id);
            $item->coordenadas = $coordenadas;
            array_push($items, $item);
        }

        return response()->json($items);
    }

    public function getCoordenadasxRuta($rutaId) {
        $puntos = new Coordenada();
        $puntos = $puntos->getCoordenadasxLineas($rutaId);

        $route = Ruta::findOrFail($rutaId);

        $linea = Linea::findOrFail($route->linea_id);

        $datos = new \stdClass();
        $datos->id = $route->id;
        $datos->nombre = $linea->nombre;
        $datos->ruta = $route->tipo;
        $datos->coordenadas = $puntos;

        return response()->json($datos);
    }

    public function getCoordenadasxLinea($lineaId) {
        $linea = Linea::findOrFail($lineaId);

        $rutas = Ruta::where(['linea_id' => $lineaId])->get();

        $datos = new \stdClass();
        $datos->idLinea = $linea->id;
        $datos->nombre = $linea->nombre;

        $items = [];

        foreach ($rutas as $ruta) {
            $item = new \stdClass();
            $item->rutaId = $ruta->id;
            $item->tipo = $ruta->tipo;

            $puntos = new Coordenada();
            $puntos = $puntos->getCoordenadasxLineas($ruta->id);

            $item->coordenadas = $puntos;
            array_push($items, $item);
        }

        $datos->rutas = $items;

        return response()->json($datos);
    }
}
