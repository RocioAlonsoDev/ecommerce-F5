<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $titulo='Listado de ordenes';
        return view ('orders.index');
    }
}
