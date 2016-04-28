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

         
            'name' =>'Chia', //maybe
			'route' => 'novena 170',
           
        ]);
    }
}
