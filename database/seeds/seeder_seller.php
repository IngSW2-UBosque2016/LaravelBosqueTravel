<?php

use Illuminate\Database\Seeder;

class seeder_seller extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sellers')->insert([
    
            'name_seller' =>'Carlos',
            'last_name_seller' =>'Puentes', 
			'password' => '123456',
            
        ]);
    }
}
