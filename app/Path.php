<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
protected $primaryKey = 'id_Road';

     public function stops(){
        return $this->belongsToMany('App\Stop','roads_path_stops');
    }
	
	 public function Roads(){
        return $this->belongsToMany('App\Road','roads_path_stops');
    }
}
