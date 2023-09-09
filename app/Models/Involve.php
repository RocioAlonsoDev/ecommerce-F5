<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Involve extends Pivot
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'involves';
    protected $fillable = ['quantity', 'dish_id', 'order_id'];

    public function dish(){
        return $this->belongsTo(Dish::class);

    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
?>