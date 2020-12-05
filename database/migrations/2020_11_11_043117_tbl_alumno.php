<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $table->primary('cod_alum');
        $table->string('rut');
        $table->integer('fono');   
        $table->date('fec_nac');
        $table->string('direccion');
        $table->string('celular');
        $table->integer('ano_mat');
        $table->integer('nem');



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
