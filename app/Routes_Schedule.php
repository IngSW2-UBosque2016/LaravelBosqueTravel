<?php

namespace App;

use App\Bus;
use Illuminate\Database\Eloquent\Model;

class Routes_Schedule extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'routes_schedules';
protected $primaryKey = 'id_route_schedule';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_road', 'id_bus', 'id_ticket', 'destination', 'source', 'date', 'status', 'name', 'starting_date', 'ending_date'];

    public function bus()
    {
        return $this->belongsTo('App\Bus','id_bus');
     }   

	     public function road()
    {
        return $this->belongsTo('App\Road','id_road');
     }   


}
