<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJueganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partidos_id')->unsigned();
            $table->integer('jugadores_id')->unsigned();
            $table->string('hora');
            $table->string('dias');

            $table->foreign('partidos_id')->references('id')->on('partidos');
            $table->foreign('jugadores_id')->references('id')->on('jugadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegan');
    }
}
