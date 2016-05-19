<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{

    protected $table = 'path';
protected $primaryKey = 'id_path';

   
	 public function Roads(){
        return $this->belongsToMany('App\Road','road_path')->withPivot('road_id');
    }
}
