<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 5;
        $data = Dish::latest()->paginate($perPage);

        return view('dish.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dish.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dish_name' => 'required|max:30',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required',
            'dish_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas según tus necesidades
        ]);
    
        // Guardar el nuevo plato en la base de datos
        try {
            $dish = new Dish();
            $dish->dish_name = $request->input('dish_name');
            $dish->price = $request->input('price');
            $dish->description = $request->input('description');
        
            if ($request->hasFile('dish_image')) {
                $image = $request->file('dish_image');
                $imageData = file_get_contents($image->getRealPath());
                $dish->dish_image = $imageData;
            } 
            $dish->save();
        } catch (\Illuminate\Database\QueryException $e){
            dd($e->getMessage()); 
        }

    
        return redirect()->route('dish.index')->with('success', 'Dish added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('dish.show', compact ('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dish_id)
    {
        $dish = Dish::find($dish_id);

        if(!$dish) {
            return redirect()->route('dish.index')->with('error', 'Dish not found');
        }

        return view('dish.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $dish_id)
    {

        try {
            $request->validate([
                'dish_name' => 'required|max:30',
                'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
                'description' => 'required',
                'dish_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $dish = Dish::find($dish_id);

            if (!$dish){
                return redirect()->route('dish.index')->with('error', 'Dish not found');
            }

            $dish->dish_name = $request->input('dish_name');
            $dish->price = $request->input('price');
            $dish->description = $request->input('description');

            if ($request->hasfile('dish_image')) {
                $image = $request->file('dish_image');
                $imageData = file_get_contents($image->getRealPath());
                $dish->dish_image = $imageData;
            }

            $dish->save();

            return redirect()->route('dish.index')->with('succes', 'Dish updated successfully');
        
        }  catch (QueryException $e) {
            dd($e->getMessage()); // Muestra el mensaje de error completo
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dish_name)
    {
        $dish = Dish::find($dish_name);

        if (!$dish) {
            return redirect()->route('dish.index')->with('error', 'Dish not found');
        } 

        $dish->delete();
        return redirect()->route('dish.index')->with('succes', 'Dish data deleted successfully');
    }
}
