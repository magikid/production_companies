<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->string('character_name');
            $table->integer('base_pay');
            $table->integer('revenue_share');

            $table->foreign('movie_id')
              ->references('id')->on('movies')
              ->onDelete('cascade');
            $table->foreign('actor_id')
              ->references('id')->on('actors')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
