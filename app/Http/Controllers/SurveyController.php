<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Survey;
use App\Http\Controllers\API\BaseController as BaseController ;
use App\Http\Resources\SurveyResource as SurveyResource;
class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $surveys=Survey::all();
        return view('admin.surveys.surveys',compact('surveys'));
    }


    public function create()
    {
        return view('admin.surveys.add_srv');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'survey_type'=>'required',
            'disease_id'=> ['required','integer'] ]  );
            $survvey = new survey();
            $survvey->name = $request->input('name');
            $survvey->survey_type = $request->input('survey_type');
            $survvey->disease_id = $request->input('disease_id');
            $survvey->save();
            return redirect(route('surveys'))->with ('message','success');
    }

    public function show($id)
    {
        $survey = Survey::find($id);
        if ( is_null($survey) ) {
            return $this->sendError('not found'  );
              }
              return $this->sendResponse(new SurveyResource($survey), 'Success' );

    }


    public function edit($id)
    {
        $survey = survey::find($id);
        return view('admin.surveys.edit', compact('survey'));
    }


    public function update(Request $request, $id)
    {
        $survey = Survey::find($id);
        $request->validate([
         'name'=> 'required',
         'survey_type'=> 'required',
         'disease_id'=> ['required','integer'] ]  );
        $survey ->update($request->all());
        $survey->save();
        return redirect(route('surveys'))->with('message', 'updated successfully');
    }


    public function destroy($id)
    {
        $survey = Survey::find($id);
        $survey->delete();
        return redirect(route('surveys'))->with('message', 'deleted successfully');
    }
    }



