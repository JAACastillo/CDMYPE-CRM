<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtConsultoresTable extends Migration
{

    public function up()
    {
        Schema::create('at_consultores', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('at_id');
            $table->integer('consultor_id');
            $table->datetime('fecha_oferta')->nullable();
            $table->datetime('fecha_seleccion')->nullable();
            $table->enum('estado', ['Enviado', 'Seleccionado'])->default('Enviado');
            $table->string('doc_oferta')->nullable();
            $table->double('evaluacion')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_consultores');
    }
}
