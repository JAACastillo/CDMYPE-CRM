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
            $table->string('slug')->unique();
            $table->text('descripcion');
            $table->string('imagen')->nullable();
            $table->enum('tipo', ['Servicio social', 'Pasantías', 'Investigaciones', 'Otro']);
            $table->integer('especialidad_id');
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
