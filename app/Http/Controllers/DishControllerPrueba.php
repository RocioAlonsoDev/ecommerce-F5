<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishControllerPrueba extends Controller
{
    public function show($dish_name = null){
        if ($dish_name === null) {
            $dish_name = 'Nombre del plato'; 
        }

        return view('dish.dish', ['dish_name' => $dish_name]);
    }
}
