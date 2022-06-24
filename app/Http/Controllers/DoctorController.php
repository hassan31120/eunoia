<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{

    public function requests()
    {
        return view('doctor.requests');
    }

    public function appointments()
    {
        return view('doctor.appointments');
    }

    public function profile()
    {
       $doctor= Auth::guard('webdoctor')->user();
        return view('doctor.profile', compact('doctor'));
    }
    public function update(Request $request)
    {
        $id =  Auth::guard('webdoctor')->user()->id;
        $doctor = Doctor::find($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'phone_no' => ['required'],
            'age' => ['required'],
            'address' => ['required'],
        ]);

        $password = Hash::make($request->input('password'));

        $doctor->update($request->all());
        $doctor->password = $password;
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor updated successfully');

    }

    public function patientdetails($id)
    {
            $user = User::find($id);
            return view('doctor.patient_details',compact('user'));
    }

    public function patients()
    { $id =  Auth::guard('webdoctor')->user()->id;
        $users = User::where('doctor_id',$id)->get();
        return view('doctor.patients',compact('users','id'));
    }
}
