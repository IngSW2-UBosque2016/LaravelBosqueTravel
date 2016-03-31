<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routes_Schedule extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'routes_schedules';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_road', 'id_bus', 'id_ticket', 'destination', 'source', 'date', 'status', 'name', 'starting_date', 'ending_date'];

}
