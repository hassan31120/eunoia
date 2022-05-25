<?php

namespace App\Http\Controllers\API;

use App\Models\Answer;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\AnswerResource;
use Illuminate\Http\Request;

class ApianswerController extends BaseController
{

    public function index()
    {
        $answers = Answer::all();
        return $this->sendResponse(AnswerResource::collection($answers), 'Answers Receieved Successfully!');
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
        $answer = Answer::find($id);

        if (is_null($answer)) {
            return $this->sendError('Answer not found!');
        }

        return $this->sendResponse(new AnswerResource($answer), 'Answer Found Successfully!');
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
