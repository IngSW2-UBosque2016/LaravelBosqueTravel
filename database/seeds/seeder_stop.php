<?php

use Illuminate\Database\Seeder;

class seeder_stop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('stops')->insert([
    
            'name_stop' =>'Cra 7 # 135',
            'location' => '4.71345, -74.02905',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
			
			
        ]
		
		);
		
		
		 DB::table('stops')->insert([
		  'name_stop' =>'Cra 7 # 140',
            'location' => '4.71586, -74.02861',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
			
		]
		
		);
    }
}
