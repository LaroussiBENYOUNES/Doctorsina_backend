<?php

namespace App\Http\Controllers;

use App\Models\PriceCategoryOption;
use Illuminate\Http\Request;

class AdminOptionController extends Controller
{
    public function store(Request $request, PriceCategory $category)
    {
        $request->validate([
            'option_name' => 'required|string',
            'option_price' => 'required|numeric',
        ]);

        $category->options()->create([
            'name' => $request->input('option_name'),
            'price' => $request->input('option_price'),
        ]);

        return redirect()->route('admin.prices.index')->with('success', 'Price option added successfully.');
    }

    public function destroy(PriceCategoryOption $option)
    {
        $option->delete();

        return redirect()->route('admin.prices.index')->with('success', 'Price option deleted successfully.');
    }
}
