<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAencsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aencs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('dni');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('year');
            $table->string('departamento');
            $table->string('cargo');
            $table->string('caracter');
            $table->string('dedicacion');
            $table->text('docencia');
            $table->text('investigacion');
            $table->text('extension');
            $table->text('gestion');
            $table->text('capacitacion');
            $table->enum('estado', ['A', 'G'])->default('A');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aencs');
    }
}
