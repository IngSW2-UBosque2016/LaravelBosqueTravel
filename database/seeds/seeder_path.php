<?php

use Illuminate\Database\Seeder;

class seeder_path extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('path')->insert([
         
            'latitude1' => '4.71345',
			'latitude2' => '4.90345',
			'longitude1'=>'-74.02905',	
			'longitude2'=>'-77.02905',
			
        ]);  
		
		  DB::table('path')->insert([
         
            'latitude1' => '4.91345',
			'latitude2' => '4.99345',
			'longitude1'=>'-77.02905',	
			'longitude2'=>'-79.02905',
			
			
        ]);
    }
}
