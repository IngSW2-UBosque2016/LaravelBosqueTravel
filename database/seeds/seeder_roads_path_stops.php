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

            'id_path' =>'1',
            'id_Stop' =>'1',
			'id_Road' => '1',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
      
        ]);
    }
}
