<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */

 
   public function stops(){
        return $this->belongsToMany('App\Stop','roads_path_stops');
    }
	
   public function path(){
        return $this->belongsToMany('App\Path','roads_path_stops');
    }
 
  
    protected $table = 'roads';
protected $primaryKey = 'id_Road';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'route'];

}
