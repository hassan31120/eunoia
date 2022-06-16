<?php

namespace App\Http\Controllers;

use App\Models\MentalGames;
use Illuminate\Http\Request;

class AdminMentalGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = MentalGames::all();
        return view('admin.MentalGames.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.MentalGames.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'answer' => 'required'
        ]);

        $game = new MentalGames();

        $game->title = $request->input('title');
        $game->description = $request->input('description');
        $game->answer = $request->input('answer');
        $game->image = $request->input('image');
        $game->link = $request->input('link');
        $game->save();

        return redirect(route('admin.games'))->with('message', 'Game Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = MentalGames::find($id);
        return view('admin.MentalGames.edit', compact('game'));
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
        $game = MentalGames::find($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'answer' => 'required'
        ]);

        $game->update($request->all());
        $game->save();
        return redirect()->back()->with('message', 'Game Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = MentalGames::find($id);
        $game->delete();
        return redirect(route('admin.games'))->with('message', 'Game deleted successfully');
    }
}
