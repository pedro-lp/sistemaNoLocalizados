<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosDesaparecidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_desaparecidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',45);
            $table->string('apellidoPat',45);
            $table->string('apellidoMat',45);
            $table->integer('sexo');
            $table->integer('nacionalidad');
            $table->string('curp',18);
            $table->string('rfc',13);
            $table->integer('edoCivil');
            $table->integer('edoNacimiento');
            $table->date('fechaNacimiento');
            $table->integer('edad');
            $table->integer('escolaridad');
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
        Schema::dropIfExists('datos_desaparecidos');
    }
}
