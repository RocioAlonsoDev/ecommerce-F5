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

    public function users(){
        return $this->belongsTo(User::class)->withDefault();
    }

    public function dishes(){
        return $this->belongsToMany(Dish::class)->withPivot('id')->using(Involve::class);
    }
    
}
