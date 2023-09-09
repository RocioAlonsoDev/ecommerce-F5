<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Involve extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'involves';
    protected $fillable = ['quantity', 'dish_id', 'order_id'];

    public function dish(){
        return $this->belongsTo(Dish::class, 'dish_id');

    }

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
?>