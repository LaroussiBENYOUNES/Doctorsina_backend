<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Http\Requests\Patient\CreatePatientRequest;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\CaseHistory;
use App\Models\User;
use App\Models\Document;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    public function index()
    {
        
        $patients = User::patient()->where('doctor_id', Auth::user()->id)->get();
        $departments = Department::all();
        return view('doctor.pages.patients.patient',compact('patients','departments'));
    }

    public function create()
    {
        return view('doctor.pages.patients.modal.create')->with('departments',Department::all());
    }

    public function store(CreatePatientRequest $request)
    {

        /*
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone_number' => 'required|numeric|unique:users',
        ]);
        */
        if ($request->picture){
            $imageName = 'DOCTORSINA_'.Hash('sha1', random_int(100000, 999999)).'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads/patients_pictures/'), $imageName);
        }
        else{
            $imageName = null;
        }
        $patient = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'blood_group' => $request->blood_group,
            'picture' =>$imageName,
            'doctor_id' => Auth::user()->id,
            'type' => 'patient'
        ]);

        if ($request->departments){
            $patient->departments()->attach($request->departments);
        }

        // redirect user
        return redirect(route('patients.index'))->with('message', 'Patient added successfully.');
    }

    public function show(User $patient)
    {
        return view('doctor.patients.show')
            ->with('appointments', Appointment::where('patient_id',$patient->id)->get())
            ->with('casehistories', CaseHistory::where('patient_id',$patient->id)->get())
            ->with('documents', Document::where('patient_id',$patient->id)->get())
            ->with('prescriptions', Prescription::all())
            ->with('patient', $patient)
            ->with('departments',Department::all());
    }

    public function edit(User $patient)
    {
        return view('doctor.patients.page.create')->with('patient', $patient)->with('departments',Department::all());
    }

    public function update(Request $request, $id)
    {
        $patient = User::findorfail($id);
        $data = $request->only('first_name', 'last_name', 'national_id', 'email', 'address', 'birth_date', 'gender', 'phone_number', 'mobile', 'emergency', 'blood_group');

        if ($request->hasFile('picture')) {
            $imageName = 'DOCTORSINA_'.Hash('sha1', random_int(100000, 999999)).'.'.$request->picture->extension();  
            $pic =$request->picture->move(public_path('uploads/patients_pictures/'), $imageName);
            Storage::delete($patient->picture);
            $data['picture'] =  $imageName ;
        }

        if ($request->departments) {
            $patient->departments()->sync($request->departments);
        }

        $patient->update($data);
        
        return redirect(route('patients.index'))->with('message', 'Patient updated successfully.');;
      
    }
    public function destroy($id)
    {
        $patient = User::findorfail($id);
        $patient->departments()->detach();
        Storage::delete($patient->picture);
        $patient->delete();

        // redirect user
        return redirect(route('patients.index'))->with('message', 'Patient Deleted Successfully.');;
    }
    

    
}
