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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('socio')->nullable();
            $table->string('ingreso')->nullable();
            $table->string('salida')->nullable();
            $table->string('estado')->nullable();
            $table->integer('llaves')->nullable();
            $table->string('devolvio_llave')->nullable();
            $table->integer('toalla')->nullable();
            $table->string('devolvio_toalla')->nullable();
            $table->string('disciplina')->nullable();
            $table->string('plan')->nullable();
            $table->date('fecha_rev')->nullable();
            $table->decimal('deuda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
};
