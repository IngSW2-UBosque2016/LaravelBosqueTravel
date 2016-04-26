<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('sellers', function(Blueprint $table) {
                $table->increments('id_Seller');
                $table->string('name_seller');
                $table->string('last_name_seller');
                $table->text('password');
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
        Schema::drop('sellers');
    }

}
