<?php

use Illuminate\Database\Seeder;

class seeder_routes_schedules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes_schedules')->insert([

            'id_driver' =>'1',
            'id_road' =>'1', //maybe
			'id_bus' => '1',
      
			'destination'=>'',
			'source' =>'',
			'date' =>'2016-03-17 00:00:00',
			'status' =>'',
			'name' =>'', //maybe
			'starting_date' =>'2016-03-17 00:00:00',
			'ending_date' =>'2016-03-17 00:00:00',
        ]);
    }
}
