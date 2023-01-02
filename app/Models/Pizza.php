<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $casts = [
        'toppings' => "array"   // for casting toppings array to json to store in db and visa-versa when retrieving
    ];
}
