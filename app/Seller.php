<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sellers';
protected $primaryKey = 'id_Seller';

public static $key = 'id_Seller';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_seller', 'last_name_seller', 'password'];

}
