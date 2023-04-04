<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acces extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'acces';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'id_user',
        'id_role',
        'key'
    ];
}
