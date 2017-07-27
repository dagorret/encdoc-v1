<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBencTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bencs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->integer('cuatrimestre');
            $table->integer('asignatura')->unsigned();
            $table->string('asignatura_name');
            $table->string('departamento');
            $table->enum('modalidad', ['P', 'D']);
            $table->string('informante');
            $table->string('name');
            $table->string('dedicacion');
            $table->string('cargo');
            $table->string('caracter');
            $table->enum('bp1',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp2',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp3',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp4',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp5',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp6',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp7',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp8',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp9',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp10', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp11', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp12', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp13', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp14', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('bp15', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->string('otras');
            $table->integer('user_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();
            
            $table->index('user_id');
            $table->index(['docente_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bencs');
    }
}