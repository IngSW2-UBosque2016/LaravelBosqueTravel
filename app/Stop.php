<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
	 
	 
    protected $table = 'stops';
protected $primaryKey = 'id_Stop';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_stop', 'location'];

	
	 public function Roads(){
        return $this->belongsToMany('App\Road','road_stop')->withPivot('road_id');
    }
	
	   
}
