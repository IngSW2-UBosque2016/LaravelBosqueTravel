<?php

use Illuminate\Database\Seeder;

class seeder_tickets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tickets')->insert([
    
            'id_user' =>'1',
            'id_seller' =>'1', 
			'create_date' => '',
            'expiration_date' =>'',
            'use_date' =>'',
            
        ]);
    }
}
