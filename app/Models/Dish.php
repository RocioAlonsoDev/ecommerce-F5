<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $table = 'dishes';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'description', 'image'];

    public function orders(){
        return $this->belongsToMany(Order::class, 'involves', 'dish_id', 'order_id')
        ->withPivot('quantity');
    }
}

