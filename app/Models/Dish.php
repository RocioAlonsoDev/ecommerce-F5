<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $table = 'dish';
    protected $primaryKey = 'dish_id';
    protected $fillable = ['dish_name', 'price', 'description', 'dish_image'];
}

