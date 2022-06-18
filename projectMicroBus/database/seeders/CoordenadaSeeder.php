<?php

namespace Database\Seeders;

use App\Models\Coordenada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coordenada;

class CoordenadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //linea 5
        //ida
        Coordenada::create([
            'latitud' => -17.7267533802,
            'longitud' => -63.1384822645,
            'ruta_id' => 1
        ]);
        Coordenada::create([
            'latitud' => -17.7265854773,
            'longitud' => -63.138753376,
            'ruta_id' => 1
        ]);
        //vuelta
        Coordenada::create([
            'latitud' => -17.8251477167,
            'longitud' => -63.2347364167,
            'ruta_id' => 2
        ]);
        Coordenada::create([
            'latitud' => -17.824900833,
            'longitud' => -63.234937633,
            'ruta_id' => 2
        ]);

        //linea 8
        /// escribir aquiii-.......................

       //linea 9 
        //ida
        Coordenada::create([
            'latitud' => -17.7971488,
            'longitud' => -63.1209096,
            'ruta_id' => 1
        ]);

        Coordenada::create([
            'latitud' => -17.771331,
            'longitud' => -63.2089857,
            'ruta_id' => 1
        ]);
        //vuelta
        Coordenada::create([
            'latitud' => -17.7714495,
            'longitud' => -63.2090742,
            'ruta_id' => 2
        ]);


        Coordenada::create([
            'latitud' => -17.8037553,
            'longitud' => -63.0890912,
            'ruta_id' => 2
        ]);
        //linea 10
        //ida
        Coordenada::create([
            'latitud' => -17.810668,
            'longitud' => -63.1191503,
            'ruta_id' => 1
        ]);

        Coordenada::create([
            'latitud' => -17.7148167,
            'longitud' => -63.1690811,
            'ruta_id' => 1
        ]);
        //vuelta
        Coordenada::create([
            'latitud' => -17.810668,
            'longitud' => -63.1191503,
            'ruta_id' => 2
        ]);

        Coordenada::create([
            'latitud' => -17.7147715,
            'longitud' => -63.1691397,
            'ruta_id' => 2
        ]);

       //linea 11
         /// escribir aquiii-.......................


        //linea 16
        /// escribir aquiii-.......................


       //linea 17
         /// escribir aquiii-.......................

        //linea 18
        /// escribir aquiii-.......................


    }
}
