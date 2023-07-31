<?php

namespace App\Http\Controllers;

use App\Models;
use App\Appointment;
use App\CaseHistory;
use App\Document;
use App\Prescription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function showUserprofile(Request $request)
    {
        if ((auth()->user()->type == 'patient') or ($request->types == 'patient')) {
        return view('backend.pages.profile.patients.show')
            ->with('appointments', Appointment::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
            ->with('casehistories', CaseHistory::where('patient_id',$request->id)->get())
            ->with('documents', Document::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
            ->with('prescriptions', Prescription::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
            ->with('patient', User::where('id',$request->id)->first());
        }else{
            return view('backend.pages.profile.doctors.show')
            ->with('appointments', Appointment::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
            ->with('casehistories', CaseHistory::where('patient_id',$request->id)->get())
            ->with('documents', Document::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
            ->with('prescriptions', Prescription::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
            ->with('doctor', User::where('id',$request->id)->first());
        }
    }

    public function editUserprofile(Request $request)
    {
        if ((auth()->user()->type == 'patient') or ($request->types == 'patient')){
        return view('auth.profile.patients.create')->with('patient', User::where('id',$request->id)->first())->with('departments',Department::all());
        }else {
            return view('auth.profile.doctors.create')->with('doctor', User::where('id',$request->id)->first())->with('departments',Department::all());
        }
    }
    /********************************************/
    public function showAppointmentForprofile(Request $request)
    {

        foreach (Appointment::where('patient_id',$request->id)->get() as $appointment){

            $date_time = $appointment->date.' '.$appointment->time;
            //$end_date_time = $appointment->end_date.' '.$appointment->end_time;

            //$bed = $appointment->bed;
            if (Carbon::parse($date_time)->lt(now()) && $appointment->status == 'confirmed'){
                $appointment->update([
                    'status'=> 'Treated'
                ]);
            }
            else if(Carbon::parse($date_time)->lt(now()) && $appointment->status == 'pending') {
                $appointment->update([
                    'status'=> 'cancelled'
                ]);
            }
        }
        return view('auth.profile.appointments.list')
            ->with('pendingAppointments', Appointment::where('status','pending')->where('patient_id',$request->id)->get())
            ->with('confirmedAppointments', Appointment::where('status','confirmed')->where('patient_id',$request->id)->get())
            ->with('cancelledAppointments', Appointment::where('status','cancelled')->where('patient_id',$request->id)->get())
            ->with('treatedAppointments', Appointment::where('status','treated')->where('patient_id',$request->id)->get())
            ->with('appointments', Appointment::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get());
    }

    public function showAppointmentDetailsForPprofile(Request $request)
    {
        return view('auth.profile.appointments.show')       
        ->with('doctor', User::where('id',$request->doctor_id)->first())
         ->with('patients', User::where('id',$request->patient_id)->first())
         ->with('Appointment', Appointment::where('id',$request->id)->first());
    }

    public function createAppointmentForProfile(Request $request)
    {
        if (auth()->user()->type == 'doctor') {
        return view('auth.profile.appointments.create')
            ->with('doctors', User::doctor()->get())
            ->with('patients', User::patient()->get())
            ->with('departments', department_user::where('user_id',$request->id)->join('Departments','Departments.id','=','department_user.department_id')->get())
            ->with('timeschedules', TimeSchedule::all());
           }   else {

                return view('auth.profile.appointments.create')
                ->with('doctors', User::doctor()->get())
                ->with('patients', User::where('id',$request->id)->get())
                ->with('departments', Department::all())
                ->with('timeschedules', TimeSchedule::all());
            }
    }
    /********************************************/
    public function showCaseHistoryForprofile(Request $request)
    {
        return view('auth.profile.casehistories.list')->with('casehistories', CaseHistory::where('patient_id',$request->id)->get());
    }

    public function showCaseHistoryDetailsForprofile(Request $request)
    {
        return view('auth.profile.casehistories.show')
        ->with('casehistory', CaseHistory::where('id',$request->caseID)->first())
        ->with('patient', User::where('id',$request->id)->get());
    }
    public function createCaseHistoriesForProfile()
    {
        return view('auth.profile.casehistories.create')
            ->with('patients', User::patient()->get());
    }
    /********************************************/
    public function showDocumentForprofile(Request $request)
    {
        return view('auth.profile.documents.list')->with('documents', Document::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get());

    }

    public function showDoumentDetailsFor(Request $request)
    {
        return view('auth.profile.documents.show')
        ->with('document', Document::where('id',$request->id)->first() )
        ->with('patients', User::where('id',$request->patient_id)->get())
        ->with('doctors', User::where('id',$request->doctor_id)->get());

    }
    public function createDoumentDetailsFor()
    {
        return view('auth.profile.documents.create')
            ->with('patients', User::patient()->get())
            ->with('doctors', User::doctor()->get());
    }

    /********************************************/
    public function showPrescriptionForprofile(Request $request)
    {
        return view('auth.profile.prescriptions.list')->with('prescriptions', Prescription::where('id',$request->id)->get());
    }

    public function showPrescriptionDetailsForProfile(Request $request)
    {
        return view('auth.profile.prescriptions.show')
        ->with('document', Prescription::where('id',$request->id)->first() )
        ->with('patients', User::where('id',$request->patient_id)->get())
        ->with('doctors', User::where('id',$request->doctor_id)->get());
    }   
    /********************************************/
    public function showTimeSchedulesForDoctor(Request $request)
    {
        return view('auth.profile.timeschedules.list')->with('doctor',User::where('id',$request->id)->first());
    }
    public function createtimeScheduleForDoctor(User $doctor)
    {
        return view('auth.profile.timeschedules.create')->with('doctor', $doctor);
    }
    /********************************************/
    public function suggestion()
    {
               return view('auth.profile.user.dashboard')
               ->with('appointments', Appointment::inRandomOrder()->limit(5)->where('doctor_id',auth()->user()->id)->orWhere('patient_id',auth()->user()->id )->get())
               ->with('documents', Document::inRandomOrder()->limit(5)->where('doctor_id',auth()->user()->id)->orWhere('patient_id',auth()->user()->id )->get());
    }

    /********************************************/

    public function myPatient()
    {

        return view('auth.profile.patients.list')
        ->with('patients', 
        DB::table('Appointments')
            ->where('doctor_id',auth()->user()->id)
            ->join('users' , 'users.id','=','Appointments.patient_id')
            ->get()->unique('patient_id')
        )
        ->with('departments',Department::all());

    
    }
}      