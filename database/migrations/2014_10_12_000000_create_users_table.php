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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('imagen')->nullable();
                                   
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('direccion')->nullable();
            $table->string('distritos_id')->nullable();
            $table->integer('dni')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('sexo')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('tel_casa_1')->nullable();
            $table->integer('tel_casa_2')->nullable();
            
            $table->integer('movil')->nullable();
            $table->date('fecha_nacimiento')->nullable();

            $table->string('cargos_id')->nullable();
            $table->string('areas_id')->nullable();
            //$table->string('categorias_id')->nullable();
            $table->string('acuerdo')->nullable();
            $table->string('reglamento')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->string('fecha_cese')->nullable();
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
