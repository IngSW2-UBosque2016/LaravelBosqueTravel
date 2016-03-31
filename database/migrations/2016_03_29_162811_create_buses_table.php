<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('buses', function(Blueprint $table) {
                $table->increments('id_bus');
                $table->string('id_drivers');
$table->string('capacity');
$table->double('actual_latitude');
$table->double('actual longitude');

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
        Schema::drop('buses');
    }

}
