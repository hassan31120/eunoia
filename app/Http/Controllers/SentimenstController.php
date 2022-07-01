<?php

namespace App\Http\Controllers;
use App\Models\Sentiment;
use Illuminate\Http\Request;

class SentimenstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Sentiments = Sentiment::all();
        return view('admin.Sentiments.index', compact('Sentiments'));

    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
