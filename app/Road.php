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

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'route'];

}
