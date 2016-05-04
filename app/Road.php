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

     protected $table = 'roads';
protected $primaryKey = 'id_Road';


   public function stops(){
        return $this->belongsToMany('App\Stop','road_path_stop')->withPivot('stop_id');
    }
	
   public function path(){
        return $this->belongsToMany('App\Path','road_path_stop')->withPivot('path_id'); 
    }
 
  	 public function routesSchedules()
    {
        return $this->hasMany('App\Routes_Schedule','id_route_schedule');
     }   

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'route'];
	
	


}
