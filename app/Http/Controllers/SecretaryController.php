<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SecretaryController extends Controller

{
    public function index(){
        $secretaries = User::Secretray()->where('doctor_id', Auth::user()->id)->get();
        return view ('doctor.pages.secretaries.index',compact('secretaries'));
    }


    public function store(Request $request){
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
            'type' => 'secretary'
        ]);

        // redirect user
        return redirect(route('secreatries.index'))->with('message', 'Secretary added successfully.');
    }

    //update secretary 
    public function update(Request $request, $id)
    {
        $secretary = User::findorfail($id);

        $data = $request->only('first_name', 'last_name', 'national_id', 'email', 'address', 'birth_date', 'gender', 'phone_number', 'mobile', 'emergency', 'blood_group');

        if ($request->hasFile('picture')) {
            $imageName = 'DOCTORSINA_'.Hash('sha1', random_int(100000, 999999)).'.'.$request->picture->extension();  
            $pic =$request->picture->move(public_path('uploads/patients_pictures/'), $imageName);
            Storage::delete($secretary->picture);
            $data['picture'] =  $imageName ;
        }


        $secretary->update($data);
        
        return redirect(route('secreatries.index'))->with('message', 'secretary updated successfully.');;
      
    }

    public function destroy($id){
        $secretary = User::findorfail($id);
        Storage::delete($secretary->picture);
        $secretary->delete();

        return redirect(route('secreatries.index'))->with('message', 'Secretary deleted successfully.');
    }
}
