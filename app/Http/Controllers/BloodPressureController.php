<?php

namespace App\Http\Controllers;
use App\Models\BloodPressure;
use Illuminate\Http\Request;

class BloodPressureController extends Controller
{
    public function store(Request $request){
    $request->validate([
        'blood_pressure' => 'required|numeric',
    ]);

   $patient_id= auth()->user()->id;

   BloodPressure::create([
        'value'=>  $request->blood_pressure,
       'added_at'=> $request->added_at,
        'patient_id' => $patient_id
    ]);

    return redirect()->route('dashboard')
        ->with('message', 'Blood Pressure value added successfully.');
    }
}
