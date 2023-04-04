<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rents';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'start',
        'end',
        'id_car',
        'id_customer',
    ];
}
