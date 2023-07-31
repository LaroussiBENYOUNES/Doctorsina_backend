<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'value' => 'required|numeric',
        ]);

        $patient_id= auth()->user()->id;

        Temperature::create([
            'value'=> $request->value,
            'added_at'=> $request->added_at,
            'patient_id' => $patient_id
        ]);

        return redirect()->route('dashboard')
            ->with('message', 'Temperature value added successfully.');
    }
}
