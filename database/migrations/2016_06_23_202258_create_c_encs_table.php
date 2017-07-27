<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCEncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cencs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->integer('cuatrimestre');
            $table->integer('asignatura')->unsigned();
            $table->string('asignatura_name');

            $table->enum('modalidad', ['P', 'D']);

            $table->string('name');

            $table->enum('cp1',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp2',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp3',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp4',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp5',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp6',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp7',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp8',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp9',  ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp10', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp11', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp12', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp13', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp14', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp15', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp16', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp17', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $table->enum('cp18', ['A', 'B', 'C', 'D', 'E', 'F', 'G']);

            $table->integer('user_id')->unsigned();
            $table->integer('docente_id')->unsigned();

            $table->index('user_id');
            $table->index(['docente_id']);

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
        Schema::drop('cencs');
    }
}
