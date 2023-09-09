<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('dishes')->get();

        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'state'    =>  'required',
            'payment'  =>  'required',
            'delivery' =>  'required',
            'comments' => 'nullable',
        ]);


        $order = new Order;

        $order->state = $request->state;
        $order->payment = $request->payment;
        $order->delivery = $request->delivery;
        $order->comments = $request->comments;
        

        $order->save();

        return redirect()->route('order.index')->with('success', 'Order Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'state'    =>  'required',
            'payment'  =>  'required',
            'delivery' =>  'required',
            'comments' => 'nullable',
        ]);

      

        $order->state = $request->state;
        $order->payment = $request->payment;
        $order->delivery = $request->delivery;
        $order->comments = $request->comments;
        
        $order->save();

        return redirect()->route('order.index')->with('success', 'Order Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
        $order = Order::find($id);
    
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Order not found');
        }
    

        $order->delete();
    
        return redirect()->route('order.index')->with('success', 'Order Data deleted successfully');
    }
}
