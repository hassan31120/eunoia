<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{

    public function index()
    {
        return view('doctor.requests');
    }

    public function index1()
    {
        return view('doctor.appointments');
    }

    public function index2($id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.profile', compact('doctor'));
    }

    public function index3()
    {
        return view('doctor.patient_details');
    }

    public function index4()
    {
        return view('doctor.patients');
    }
}
