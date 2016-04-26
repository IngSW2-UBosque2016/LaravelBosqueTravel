<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoutesSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('routes_schedules', function(Blueprint $table) {
                $table->increments('id_route_schedule');
				$table->integer('id_driver')->unsigned();
				    $table->foreign('id_driver')->references('id')->on('drivers');
                $table->integer('id_road')->unsigned();
				    $table->foreign('id_road')->references('id_Road')->on('roads');
                $table->integer('id_bus')->unsigned();
		            $table->foreign('id_bus')->references('id_bus')->on('buses');
         
                $table->string('destination');
                $table->string('source');
                $table->date('date');
                $table->string('status');
                $table->string('name');
                $table->date('starting_date');
                $table->date('ending_date');

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
        Schema::drop('routes_schedules');
    }

}
