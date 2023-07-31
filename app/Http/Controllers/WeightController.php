<?php

namespace App\Http\Controllers;
use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'weight' => 'required|numeric',
        ]);

       $patient_id= auth()->user()->id;

        Weight::create([
            'value'=>  $request->weight,
            'added_at'=> $request->added_at,
            'patient_id' => $patient_id
        ]);

        return redirect()->route('dashboard')
            ->with('message', 'Weight value added successfully.');
    }


}
