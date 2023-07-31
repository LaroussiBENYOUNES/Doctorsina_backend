<?php

namespace App\Http\Controllers;

use App\Models\PriceCategory;

use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index()
    {
        
        $categories = PriceCategory::with('options')->get();
        return view('admin.pages.price.price', compact('categories'));
    }
    public function showHome()
{
    $categories = PriceCategory::with('options')->get();
    return View('frontend/pages/home', compact('categories'));
}

    public function create()
    {
        return view('admin.pages.price.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'category_name' => 'required|string',
        'option_price' => 'required|numeric',
    ]);

    // Enregistrement de la catégorie
    $category = PriceCategory::create([
        'name' => $request->input('category_name'),
    ]);

    // Enregistrement de l'option
    $category->options()->create([
        'name' => 'Default Option',
        'price' => $request->input('option_price'),
    ]);

    return redirect()->route('admin.prices.index')->with('success', 'Price and category added successfully.');
}

public function edit(PriceCategory $category)
{
    return view('admin.pages.price.edit', compact('category'));
}

public function update(Request $request, PriceCategory $category)
{
    $request->validate([
        'name' => 'required|string',
        'option_price' => 'required|numeric',
    ]);

    // Update the category name
    $category->update([
        'name' => $request->input('name'),
    ]);

    // Check if the category has an associated option
    if ($category->options->isNotEmpty()) {
        // Update the option price if it exists
        $option = $category->options->first();
        $option->update([
            'price' => $request->input('option_price'),
        ]);
    } else {
        // Create a new option if it doesn't exist
        $category->options()->create([
            'name' => 'Default Option',
            'price' => $request->input('option_price'),
        ]);
    }

    return redirect()->route('admin.prices.index')->with('success', 'Price and category updated successfully.');
}




    public function destroy(PriceCategory $category)
    {
        $category->options()->delete();
        $category->delete();

        return redirect()->route('admin.prices.index')->with('success', 'Price and category deleted successfully.');
    }
}
