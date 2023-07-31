<?php

namespace App\Http\Controllers;
use App\Models\Glucose;
use Illuminate\Http\Request;

class GlucoseController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'glucose' => 'required|numeric',
        ]);

       $patient_id= auth()->user()->id;

       Glucose::create([
            'value'=> $request->glucose,
           'added_at'=> $request->added_at,
            'patient_id' => $patient_id
        ]);

        return redirect()->route('dashboard')
            ->with('message', 'glucose value added successfully.');
    }

}
