<?php

use Illuminate\Database\Seeder;

class seeder_drivers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'firstName' =>'Nelson',
			'lastName' => 'Piquet',
            'userName' => 'npiquet',
			'password'=>'28722052',
			'remember_token' =>'true',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
        ]);
        DB::table('drivers')->insert([
            'firstName' =>'Alain',
			'lastName' => 'Prost',
            'userName' => 'aprost',
			'password'=>'5904767',
			'remember_token' =>'true',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
        ]);
        DB::table('drivers')->insert([
            'firstName' =>'Ayrton',
			'lastName' => 'Senna',
            'userName' => 'asenna',
			'password'=>'1014241809',
			'remember_token' =>'true',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
        ]);
        DB::table('drivers')->insert([
            'firstName' =>'Fernando',
			'lastName' => 'Alonso',
            'userName' => 'falonso',
			'password'=>'1026241809',
			'remember_token' =>'true',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
        ]);
        DB::table('drivers')->insert([
            'firstName' =>'Sebastian',
			'lastName' => 'Vettel',
            'userName' => 'svettel',
			'password'=>'10194566587',
			'remember_token' =>'true',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
        ]);  
    }
}
