<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tickets';
protected $primaryKey = 'id_ticket';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'id_seller', 'id_reservation', 'create_date', 'expiration_date', 'use_date'];

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
     }   

}
