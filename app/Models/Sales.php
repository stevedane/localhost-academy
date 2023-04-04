<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Sales';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
       'date',
       'id_customer',
       'id_car',
       'raison'
    ];
}
