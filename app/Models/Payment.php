<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payments';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'date',
        'amount',
        'method',
        'id_customer',
        'id_car',
        'id_service',
        'service_type'
    ];
}
