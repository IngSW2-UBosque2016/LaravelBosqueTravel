<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadsPathStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_path_stop', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('id_path')->unsigned();
				    $table->foreign('id_path')->references('id_path')->on('path');
                $table->integer('id_Stop')->unsigned();
				    $table->foreign('id_Stop')->references('id_Stop')->on('stops');
                $table->integer('id_Road')->unsigned();
		            $table->foreign('id_Road')->references('id_Road')->on('roads');
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
        Schema::drop('road_path_stop');
    }
}
