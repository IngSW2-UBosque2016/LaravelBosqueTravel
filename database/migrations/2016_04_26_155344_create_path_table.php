<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('path', function (Blueprint $table) {
            $table->increments('id_path');
			$table->string('latitude1');
			$table->string('latitude2');
			$table->string('longitude1');
			$table->string('longitude2');
			
			
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
        Schema::drop('path');
    }
}
