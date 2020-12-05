<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAlumcarr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $table->primary('id');
        $table->string('codcarr')->unisigned();
        //$table->foreign('NOMBRE_COLUMNA_ANTERIOR')references('NOMBRE DE LA COLUMNA DE LA OTRA TABLA)->on('NOMBRE DE ESA TABLA')->onDelete->('TIPO DE ELIMINACION');
        $table->foreign('codcarr')->references('codcarr')->on('carrera')->onDelete('cascade');
        $table->string('cod_alum')->unisigned();
        //$table->foreign('NOMBRE_COLUMNA_ANTERIOR')references('NOMBRE DE LA COLUMNA DE LA OTRA TABLA)->on('NOMBRE DE ESA TABLA')->onDelete->('TIPO DE ELIMINACION');
        $table->foreign('')references('cod_alum')->on('alumno')->onDelete->('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
