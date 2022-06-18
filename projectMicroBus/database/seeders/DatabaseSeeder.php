<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Linea;
use App\Models\Ruta;
use App\Models\Coordenada;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(LineaSeeder::class);
        $this->call(RutaSeeder::class);
        $this->call(PuntosL1Seeder::class);
        $this->call(PuntosL2Seeder::class);
        $this->call(Coordenada17Seeder::class);
        $this->call(Coordenada18Seeder::class);
    }
}
