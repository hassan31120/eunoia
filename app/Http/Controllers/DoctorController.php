<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index2()
    {
        return view('doctor.profile');
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
