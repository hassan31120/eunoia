<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Move;

class AdminMovesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moves = Move::all();
        return view('admin.moves.index', compact('moves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.moves.add');
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
            'link' => 'required',
            'description' => 'required'
        ]);

        $art = new Move();

        $art->title = $request->input('title');
        $art->link = $request->input('link');
        $art->description = $request->input('description');
        $art->save();

        return redirect(route('admin.moves'))->with('message', 'Move Added Successfully!');
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
        $move = Move::find($id);
        return view('admin.moves.edit', compact('move'));
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
        $move = Move::find($id);
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'description' => 'required'
        ]);
        $move->update($request->all());
        $move->save();
        return redirect()->back()->with('message', 'Move Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $move = Move::find($id);
        $move->delete();
        return redirect(route('admin.moves'))->with('message', 'Move deleted successfully');
    }
}
