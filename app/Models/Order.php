<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'orders';
    protected $fillable = ['user_id', 'state', 'payment', 'delivery', 'comments'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dishes(){
        return $this->belongsToMany(Dish::class, 'involves', 'order_id', 'dish_id')->withPivot('quantity');
    }
    
}
