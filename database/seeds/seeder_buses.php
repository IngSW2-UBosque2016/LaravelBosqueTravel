<?php

use Illuminate\Database\Seeder;

class seeder_buses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            'capacity' =>'20',
            'license_plate' =>'MBK817',
			'actual_latitude' => '4.85448',
            'actual_longitude' => '-74.03087',
			'created_at'=>'-2016-03-07 00:00:00',
			'updated_at' =>'2016-03-17 00:00:00',
        ]);
        DB::table('buses')->insert([
            'capacity' =>'30',
            'license_plate' =>'ASX123',
			'actual_latitude' => '4.85448',
            'actual_longitude' => '-74.03087',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at' =>'2016-03-17 00:00:00',
        ]);
        DB::table('buses')->insert([
            'capacity' =>'30',
            'license_plate' =>'ABC123',
			'actual_latitude' => '4.85448',
            'actual_longitude' => '-74.03087',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at' =>'2016-03-17 00:00:00',
        ]);
        DB::table('buses')->insert([
            'capacity' =>'20',
            'license_plate' =>'PHP455',
			'actual_latitude' => '4.85448',
            'actual_longitude' => '-74.03087',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at' =>'2016-03-17 00:00:00',
        ]);
        DB::table('buses')->insert([
            'capacity' =>'30',
            'license_plate' =>'LAR431',
			'actual_latitude' => '4.85448',
            'actual_longitude' => '-74.03087',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at' =>'2016-03-17 00:00:00',
        ]);
    }
}
