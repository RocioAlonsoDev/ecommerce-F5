<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'name'    =>  'required|max:30',
            'description'  =>  'required',
        ]);


        $category = new Category();

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect()->route('category.index')->with('success', 'Order Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact ('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'    =>  'required|max:30',
            'description'  =>  'required',
        ]);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        
        $category->save();

        return redirect()->route('category.index')->with('success', 'Order Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        $category = Category::find($id);
    
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Order not found');
        }
    

        $category->delete();
    
        return redirect()->route('category.index')->with('success', 'Order Data deleted successfully');
    }
}
