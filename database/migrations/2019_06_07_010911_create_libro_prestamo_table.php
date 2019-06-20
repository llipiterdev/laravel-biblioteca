<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroPrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->bigIncrements('id_libro_prestamo');
            $table->date('fecha_prestamo');
            $table->string('prestado_a');
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario','fk_libro_prestamo_usuario')->references('id_usuario')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_libro');
            $table->foreign('id_libro','fk_libro_prestamo_libro')->references('id_libro')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            
            $table->timestamps();
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
        Schema::dropIfExists('libro_prestamo');
    }
}
