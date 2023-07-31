<?php

namespace App\Http\Controllers;

use App\Models\Hemoglobin;
use Illuminate\Http\Request;

class HemoglobinController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'value' => 'required|numeric',
        ]);

        $patient_id= auth()->user()->id;

        Hemoglobin::create([
            'value'=>  $request->value,
            'added_at'=> $request->added_at,
            'patient_id' => $patient_id
        ]);

        return redirect()->route('dashboard')
            ->with('message', 'Hemoglobin value added successfully.');
    }
}
