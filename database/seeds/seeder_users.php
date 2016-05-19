<?php

use Illuminate\Database\Seeder;

class seeder_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
    
            'firstName' =>'Carlos',
            'lastName' =>'Puentes',
            'userName' =>'macaco23', 
			'password' => '123456',
            'remember_token' => 'false'
        ]);
       DB::table('users')->insert([
    
            'firstName' =>'Juan',
            'lastName' =>'De la cruz',
            'userName' =>'juan123', 
			'password' => '123456',
            'remember_token' => 'false'
        ]);
    }
}
