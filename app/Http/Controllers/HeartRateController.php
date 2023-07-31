<?php

namespace App\Http\Controllers;

use App\Models\HeartRate;
use Illuminate\Http\Request;

class HeartRateController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'value' => 'required|numeric',
        ]);

        $patient_id= auth()->user()->id;

        HeartRate::create([
            'value'=>  $request->value,
            'added_at'=> $request->added_at,
            'patient_id' => $patient_id
        ]);

        return redirect()->route('dashboard')
            ->with('message', 'HeartRate value added successfully.');
    }
}
