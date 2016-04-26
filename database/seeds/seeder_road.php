<?php

use Illuminate\Database\Seeder;

class seeder_road extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roads')->insert([

            'id_stop' =>'1',
            'name' =>'Chia', //maybe
			'route' => 'novena 170',
           
        ]);
    }
}
