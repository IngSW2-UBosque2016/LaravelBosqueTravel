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
			
			$table->integer('path_id')->unsigned();
				    $table->foreign('path_id')->references('id_path')->on('path');
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
        Schema::drop('road_path_stop');
    }
}
