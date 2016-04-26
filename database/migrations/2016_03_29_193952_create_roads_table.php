<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('roads', function(Blueprint $table) {
                $table->increments('id_Road');
                $table->integer('id_Stop')->unsigned();
				$table->foreign('id_Stop')->references('id_Stop')->on('stops');
				$table->string('name');
                $table->string('route');

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
        Schema::drop('roads');
    }

}
