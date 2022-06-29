<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\ArtsResource;
use App\Models\Art;
use Illuminate\Http\Request;

class ArtsController extends BaseController
{
    public function index()
    {
        $arts = Art::all();
        return $this->sendResponse(ArtsResource::collection($arts), 'Arts Receieved Successfully!');
    }

    public function show($id)
    {
        $art = Art::find($id);

        if (is_null($art)) {
            return $this->sendError('Art not found!');
        }

        return $this->sendResponse(new ArtsResource($art), 'Art Found Successfully!');
    }
}
