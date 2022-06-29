<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\MovesResource;
use App\Models\Move;
use Illuminate\Http\Request;

class movesController extends BaseController
{
    public function index()
    {
        $moves = Move::all();
        return $this->sendResponse(MovesResource::collection($moves), 'Moves Receieved Successfully!');
    }

    public function show($id)
    {
        $move = Move::find($id);

        if (is_null($move)) {
            return $this->sendError('Move not found!');
        }

        return $this->sendResponse(new MovesResource($move), 'Move Found Successfully!');
    }
}
