<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(seeder_drivers::class);
        $this->call(seeder_buses::class);
        $this->call(seeder_road::class);
		$this->call(seeder_path::class);
		$this->call(seeder_stop::class);
	    $this->call(seeder_routes_schedules::class);
        $this->call(seeder_users::class);
        $this->call(seeder_seller::class);
        $this->call(seeder_tickets::class);

		
    }
}
