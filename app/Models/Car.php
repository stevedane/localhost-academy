<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cars';
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'imma',
        'model',
        'cylindre',
        'marque',
    ];
}
