<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Weight;
use Illuminate\Support\Facades\File;
class CustomAuthController extends Controller
{

    public function index()
    {
        return view('backend.pages.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        if (Auth::attempt($credentials,$remember)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('backend.pages.registre');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric|unique:users|digits:8',
            'type' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return view("backend.pages.plans.plans")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'phone_number' => $data['phone_number'],
        'type' => $data['type'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'unique:users,email,'.$id,
            'phone_number' => 'required|numeric|unique:users,phone_number,'.$id,
            'picture' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name =  $request->last_name;
        $user->email =  $request->email;
        $user->phone_number =  $request->phone_number;
        if ($request->picture){
            if ($user->picture){
                File::delete(public_path('uploads/patients_pictures/'.$user->picture));
            }
            $img_name = 'img_'.time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('uploads/patients_pictures/'),$img_name);
            $user->picture = $img_name;
        }
        $user->update();
        return redirect()->route('dashboard')
                ->with('message', 'Profile updated successfully');

    }

    public function dashboard()
    {
        if(Auth::check()){
            if (Auth::user()->is_admin){
                return view('admin.pages.home');
            }
            elseif (Auth::user()->type=="Doctor"){
                return view('doctor.pages.home');
            }
            elseif(Auth::user()->type=="Secretary"){
                return view('secretary.pages.home');
            }
            else {
                // getting the data of weight values of the last year and past last year for dashboard
                /*
                $weightValuesCurrentYear = Auth::User()->Weights()->whereYear('created_at', date('Y'))->take(6)->get();
                $weightTochart =  array();
                $weightTochart [0]["name"] = date('Y');
                $weightTochart [0]["data"] = array();
                foreach ($weightValuesCurrentYear as $value){
                    array_push($weightTochart [0]["data"],$value->value);
                }
                $weightValuesLastYear = Auth::User()->Weights()->whereYear('created_at', date('Y')-1)->take(6)->get();
                $weightTochart [1]["name"] = date('Y')-1;
                $weightTochart [1]["data"] = array();
                foreach ($weightValuesLastYear as $value){
                    array_push($weightTochart [1]["data"],$value->value);
                }*/

                //get last 6 values of weight values
                $weights = Auth::user()->weights()->orderBy('added_at','desc')->take(6)->get();
                $weightsValues = array();
                $weightDates = array();
                foreach($weights as $weight){
                    array_push($weightsValues,$weight->value);

                        array_push($weightDates,$weight->added_at);


                }
                //get last 6 values of glucose values
                $glucoses = Auth::user()->glucoses()->orderBy('added_at','desc')->take(6)->get();
                // get only the values
                $glucoseValues = array();
                $glucosesDates = array();
                foreach($glucoses as $glucose){
                    array_push($glucoseValues,$glucose->value);

                    array_push($glucosesDates, $glucose->added_at);

                }

                //get last 6 values of blood pressure values
                $bloodPressures = Auth::user()->bloodPressures()->orderBy('added_at','desc')->take(6)->get();
                $bloodPressureValues = array();
                $bloodPressuresDates = array();
                foreach($bloodPressures as $bloodPressure ){
                    array_push($bloodPressureValues,$bloodPressure->value);

                        array_push($bloodPressuresDates,$bloodPressure->added_at);

                }

                //get last 6 values of temperature
                $temperatures = Auth::user()->temperatures()->orderBy('added_at','desc')->take(6)->get();
                $temperatureValues = array();
                $temperaturesDates = array();
                foreach ($temperatures as $temperature){
                    array_push($temperatureValues,$temperature->value);
                    array_push($temperaturesDates, $temperature->added_at);
                }


                //get last 6 values of heart rate
                $heartRates = Auth::user()->heartRates()->orderBy('added_at','desc')->take(6)->get();
                $heartRatesValues = array();
                $heartRatesDates = array();
                foreach($heartRates as $heartRate){
                    array_push($heartRatesValues,$heartRate->value);
                    array_push($heartRatesDates, $heartRate->added_at);

                }

                // get last 6 values of hemoglobin
                $hemoglobins = Auth::user()->hemoglobins()->orderBy('added_at','desc')->take(6)->get();
                $hemoglobinsValues = array();
                $hemoglobinsDates = array();
                foreach ($hemoglobins as $hemoglobin){
                    array_push($hemoglobinsValues,$hemoglobin->value);
                    array_push($hemoglobinsDates, $hemoglobin->added_at);

                }

                //initializing variable which calculates number of null columns on user table
                $NumberNullFields = 0;
                if (is_null(Auth::user()->national_id) ){
                    $NumberNullFields++;

                }
                if (is_null(Auth::user()->address)){
                    $NumberNullFields++;

                }
                if (is_null(Auth::user()->picture)){
                    $NumberNullFields++;

                }
                if (is_null(Auth::user()->birth_date)){
                    $NumberNullFields++;

                }
                if (is_null(Auth::user()->gender)){
                    $NumberNullFields++;

                }
                if (is_null(Auth::user()->mobile)){
                    $NumberNullFields++;
                }
                if (is_null(Auth::user()->blood_group)){
                    $NumberNullFields++;

                }

               $profileCompletion = (1 - $NumberNullFields/15) * 100;

                $profileLevel = array();
                array_push($profileLevel,(int) $profileCompletion);
               return view('backend.pages.home',compact('profileLevel','weightDates','weightsValues','glucoseValues','glucosesDates','bloodPressureValues',
               'bloodPressuresDates','temperatureValues','temperaturesDates','heartRatesValues','heartRatesDates','hemoglobinsValues','hemoglobinsDates'));
            }
        }

        return redirect("login")->withSuccess('You are required to login first !');
    }

    public function showProfile (){
        $user =Auth::user();
        if ($user->is_admin){
            return view('admin.pages.profile',compact('user'));
        }
        else if ($user->type == "Patient"){
            return view('backend.pages.profile',compact('user'));
        }

    }

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }


}
