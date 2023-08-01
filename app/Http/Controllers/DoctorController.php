<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Models\TimeSchedule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DoctorController extends Controller
{

    public function getTimeScheduleByDoctor(Request $request){

        if(!$request->id){
            $html = '<li class="tm"  value="">No Time Schedule For This Doctor</li>';
        }else{
            $html = '';
            $doctor = User::find($request->id);
            $timeSchedules = $doctor->timeSchedules;
            foreach ($timeSchedules as $timeSchedule) {
                $html .= '<li class="tm list-group-item" value="'.$timeSchedule->id.'"><span class="icon icon-clock-o icon-lg icon-fw">'.$timeSchedule->week_day.'</li>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function getDayoffScheduleByDoctor(Request $request){

        if(!$request->id){
            $html = '<li class="tm"  value="">No Day Off Schedule For This Doctor</li>';
        }else{
            $doctor = User::find($request->id);
            $dayoffSchedules = $doctor->dayoffSchedules;
            $TS = collect();
            foreach ($dayoffSchedules as $dayoffSchedule) {
                    $TS->push($dayoffSchedule);
            }
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function treatmentHistory(User $doctor)
    {
        return view('appointments.list')
        ->with('pendingAppointments', Appointment::where('status','pending')->get())
        ->with('confirmedAppointments', Appointment::where('status','confirmed')->get())
        ->with('cancelledAppointments', Appointment::where('status','cancelled')->get())
        ->with('treatedAppointments', Appointment::where('status','treated')->get())
        ->with('appointments', Appointment::where('doctor_id',$doctor->id)->get());
    }

    public function index()
    {
        return view('admin.pages.doctor.doctor')->with('doctors', User::doctor()->get())->with('departments',Department::all());
    }


    public function create()
    {
        return view('admin.pages.doctor.modal.create')->with('departments',Department::all());
    }

    public function store(CreateDoctorRequest $request)
    {

        $doctor = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'medical_degree' => $request->medical_degree,
            'specialist' => $request->specialist,
            'biography' => $request->biography,
            'educational_qualification' => $request->educational_qualification,
            'type' => 'doctor',
        ]);

        if($request->picture){
            $imageName = 'DOCTORSINA_'.Hash('sha1', random_int(100000, 999999)).'.'.$request->picture->extension();  
   
            $request->picture->move(public_path('uploads/doctors_pictures/'), $imageName);

            $doctor->picture = $imageName;
            $doctor->save();
        }

        if ($request->departments){
            $doctor->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Doctor Added Successfully.');
        // redirect user
        return redirect(route('doctor.index'));
    }


    public function show(User $doctor)
    {
        return view('admin.pages.doctor.modal.show')->with('doctor', $doctor)->with('departments',Department::all());
    }

    public function edit(User $doctor)
    {
        return view('admin.pages.doctor.modal.edit')->with('doctor', $doctor)->with('departments',Department::all());
    }


    public function update(Request $request, $id)
    {
        $doctor = User::findorfail($id);
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone_number', 'mobile', 'emergency', 'medical_degree', 'specialist', 'biography', 'educational_qualification');
        if ($request->hasFile('picture')) {

            $imageName = 'DOCTORSINA_'.Hash('sha1', random_int(100000, 999999)).'.'.$request->picture->extension();  
   
            $request->picture->move(public_path('uploads/doctors_pictures/'), $imageName);

            Storage::delete($doctor->picture);

            $data['picture'] = $imageName;
        }

        if ($request->departments) {
            $doctor->departments()->sync($request->departments);
        }
  
        $doctor->update($data);

      
       
        return redirect(route('doctor.index'))->with('message', 'Doctor updated successfully.');;

       
    }

    public function destroy( $id)
    {
        $doctor = User::find($id);
        $doctor->departments()->detach();
        $doctor->timeSchedules()->delete();
        Storage::delete($doctor->picture);
        $doctor->delete();
        // flash message
        session()->flash('success', 'Doctor Deleted Successfully.');
        // redirect user
        return redirect(route('doctor.index'));
    }

}

