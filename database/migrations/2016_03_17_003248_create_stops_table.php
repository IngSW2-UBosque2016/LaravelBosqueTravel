<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('stops', function(Blueprint $table) {
                $table->increments('id_Stop');
                $table->string('adress');
				$table->string('name');
				$table->string('latitude');
				$table->string('longitude');

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
        Schema::drop('stops');
    }

}
