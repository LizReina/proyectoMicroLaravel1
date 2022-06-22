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
        Schema::create('microbus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->string('placa');
            $table->string('modelo')->nullable();
            $table->integer('nro_asientos')->nullable();
            $table->integer('nro_linea')->nullable();
            $table->integer('nroInterno');
            $table->date('fecha_asignacion');
            $table->date('fecha_baja');
            $table->unsignedBigInteger('conductor_id');
            $table->softDeletes();


            $table->foreign('conductor_id')->on('conductor')->references('id')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('microbus');
    }
};
