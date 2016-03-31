<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('tickets', function(Blueprint $table) {
			          $table->engine = 'InnoDB';
                $table->increments('id_ticket');
				$table->integer('id_user')->unsigned();
			
               
                $table->integer('id_seller')->unsigned();
    
               
                $table->integer('id_reservation')->unsigned();
              
                $table->date('create_date');
                $table->date('expiration_date');
                $table->date('use_date');

                $table->index('id_user');
                $table->index('id_reservation');
                $table->index('id_seller');
                $table->timestamps();
				
					$table->foreign('id_user')->references('id')->on('users');
					  $table->foreign('id_reservation')->references('id_reservation')->on('reservations');
					              $table->foreign('id_seller')->references('id_seller')->on('sellers');
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }

}
