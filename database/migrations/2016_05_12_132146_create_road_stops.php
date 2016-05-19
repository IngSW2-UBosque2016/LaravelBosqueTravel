<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadStops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('road_stops', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('stop_id')->unsigned();
    $table->foreign('stop_id')->references('id_Stop')->on('stops');
    $table->integer('road_id')->unsigned();
    $table->foreign('road_id')->references('id_Road')->on('roads');
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
        //
    }
}
