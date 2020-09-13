<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    #converts json string -> array
    protected $casts = [
        'toppings' => 'array'
    ];
}
