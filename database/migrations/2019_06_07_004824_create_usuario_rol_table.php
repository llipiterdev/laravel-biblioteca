<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id_usuario_rol');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario','fk_usuario_rol_usuario')->references('id_usuario')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol','fk_usuario_rol_rol')->references('id_rol')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            
            $table->boolean('estado');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
