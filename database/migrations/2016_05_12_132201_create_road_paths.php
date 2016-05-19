<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadPaths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_path', function (Blueprint $table) {
        $table->integer('path_id')->unsigned();
                    $table->foreign('path_id')->references('id_path')->on('path');
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
