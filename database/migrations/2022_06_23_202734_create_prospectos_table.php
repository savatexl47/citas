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
        Schema::create('prospectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->integer('edad')->nullable();
            $table->string('profesion')->nullable();
            //$table->string('cumpleaños')->nullable();
            $table->string('imagen')->nullable();
            $table->string('direccion')->nullable();
            $table->string('distrito')->nullable();
            $table->string('documento')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('red_social_favorita')->nullable();
            $table->string('sexo')->nullable();
            $table->string('hijos')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('email')->unique();
            $table->integer('ruc')->nullable();
            $table->integer('tel_casa_1')->nullable();
            $table->integer('tel_casa_2')->nullable();
            $table->integer('movil')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('preferencia_en_promociones')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('invitado')->nullable();
            $table->string('dias_invitado')->nullable();
            $table->string('asistencia_invitado')->nullable();
            $table->string('nota')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospectos');
    }
};
