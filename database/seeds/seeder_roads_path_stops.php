<?php

use Illuminate\Database\Seeder;

class seeder_roads_path_stops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('road_path_stop')->insert([

            'path_id' =>'1',
            'stop_id' =>'1',
			'road_id' => '1',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
      
        ]);
    }
}
