<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoffeeRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('brand');
            $table->string('name');
            $table->enum('roast', ['light', 'medium', 'dark']);
            $table->string('flavor')->nullable();
            $table->timestamps();
        });

        Schema::create('dates', function(Blueprint $table)
        {
            $table->increments('id');
            $table->date('date');
            $table->integer('coffee_id')->unsigned();
            $table->timestamps();

            $table->foreign('coffee_id')->references('id')->on('coffee')->onDelete('cascade');
        });

        Schema::create('scores', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('date_id')->unsigned();
            $table->tinyInteger('score')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scores', function(Blueprint $table)
        {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['date_id']);
        });
        Schema::dropIfExists('scores');


        Schema::table('dates', function(Blueprint $table)
        {
            $table->dropForeign(['coffee_id']);
        });
        Schema::dropIfExists('dates');

        Schema::dropIfExists('coffee');
    }
}
