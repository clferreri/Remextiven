<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsuariosR', function (Blueprint $table) {
            $table->increments('IdUsuarioR');
            $table->string('Email', 35);
            $table->binary('Contraseña');
            $table->date('FechaRegistro');
            $table->tinyInteger('IdRol');
            $table->boolean('Activo');
            $table->boolean('Verificado');
            $table->binary('PinTransacciones')->nullable();
            $table->rememberToken();

            
            //Claves foraneas
            $table->foreign('IdRol', 'FK_Usuario_Rol')->references('IdRol')->on('RolesUsuariosR')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsuariosR');
    }
}
