<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
    protected $table = 'buses';

    protected $primaryKey = 'id_bus';

     public function routesSchedules()
    {
        return $this->hasMany('App\Routes_Schedule','id_route_schedule');
     }   


}
