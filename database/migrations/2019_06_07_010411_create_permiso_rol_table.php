<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol','fk_permiso_rol_rol')->references('id_rol')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_permiso');
            $table->foreign('id_permiso','fk_permiso_rol_permiso')->references('id_permiso')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_rol');
    }
}
