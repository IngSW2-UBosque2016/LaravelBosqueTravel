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

$table->string('capacity');
$table->string('license_plate');
$table->double('actual_latitude');
$table->double('actual_longitude');

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
