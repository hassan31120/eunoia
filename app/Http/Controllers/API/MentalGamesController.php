<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\API\BaseController;
use App\Http\Resources\MentalGamesResource;
use App\Models\MentalGames;
use Illuminate\Http\Request;

class MentalGamesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = MentalGames::all();
        return $this->sendResponse(MentalGamesResource::collection($games), 'Games Retrieved Successfully!');
    }

    public function randomGame()
    {
        $games = MentalGames::inRandomOrder()->limit(2)->get();
        return $this->sendResponse(MentalGamesResource::collection($games), 'Games Retrieved Successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = MentalGames::find($id);

        if (is_null($game)) {
            return $this->sendError('Game not found!');
        }

        return $this->sendResponse(new MentalGamesResource($game), 'Game Found Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
