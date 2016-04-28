<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{

    protected $table = 'path';
protected $primaryKey = 'id_path';

     public function stops(){
        return $this->belongsToMany('App\Stop','road_path_stop')->withPivot('id_Stop');
    }
	
	 public function Roads(){
        return $this->belongsToMany('App\Road','road_path_stop')->withPivot('id_Road');
    }
}
