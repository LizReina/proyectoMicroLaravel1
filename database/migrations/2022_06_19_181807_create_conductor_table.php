<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha_nacimiento')->default(date("Y-m-d H:i:s"));
            $table->string('sexo')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('categoria_lic');
            $table->string('foto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductor');
    }
};
