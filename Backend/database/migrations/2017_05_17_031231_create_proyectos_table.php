<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('titulo');
            $table->text('descripcion');
            $table->enum('tipo', ['Servicio social', 'Pasantias', 'Investigaciones', 'Otro']);
            $table->enum('estado', ['Activo', 'Ejecución', 'Finalizado']);
            $table->integer('especialidad_id');
            $table->date('finalizacion');
            $table->string('duracion');
            $table->integer('asesor_id');

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
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
        Schema::dropIfExists('proyectos');
    }
}
