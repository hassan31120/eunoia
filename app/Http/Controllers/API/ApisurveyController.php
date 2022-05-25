<?php

namespace App\Http\Controllers\API;
use App\Models\Survey;
use App\Models\Question;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\SurveyResource;
use App\Http\Resources\QuestionResource;
use Illuminate\Http\Request;

class ApisurveyController extends BaseController
{

    public function index()
    {
        $surveys = Survey::all();
        return $this->sendResponse(SurveyResource::collection($surveys), 'Surveys Receieved Successfully!');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $survey = Survey::find($id);

        if (is_null($survey)) {
            return $this->sendError('Survey not found!');
        }

        return $this->sendResponse(new SurveyResource($survey), 'Survey Found Successfully!');
    }

    public function survey_question($id)
    {
        $survey = Survey::find($id);
        if (is_null($survey)) {
            return $this->sendError('Survey not found!');
        }

        $questions = Question::where('survey_id',$id)->get();
        if (is_null($questions)) {
            return $this->sendError('Questions not found!');
        }

        return $this->sendResponse(new QuestionResource($questions), 'Questions Found Successfully!');

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
