<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Resources\LifestyleResource;
use App\Models\Lifestyle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LifestyleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lifestyles = Lifestyle::all();
        return $this->sendResponse(LifestyleResource::collection($lifestyles), 'Lifestyles retrieved sucesstully!');
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
        $lifestyle = Lifestyle::find($id);

        if (is_null($lifestyle)) {
            return $this->sendError('Lifestyle not found!');
        }

        return $this->sendResponse(new LifestyleResource($lifestyle), 'Lifestyle Found Successfully!');
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

    public function FirstLifestyle(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $lifestyle = Lifestyle::where('user_id', $user->id)->first();

        $validator = Validator::make($input, [
            'test1' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if (isset($lifestyle)) {
            $lifestyle->test1 = $input['test1'];
            $lifestyle->save();
        } else{
            $lifestyle = new Lifestyle();
            $lifestyle->user_id = $user->id;
            $lifestyle->test1 = $input['test1'];
            $lifestyle->save();
        }
        return $this->sendResponse(new LifestyleResource($lifestyle), 'Lifestyle Updated successfully!');

    }

    public function SecondLifestyle(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $lifestyle = Lifestyle::where('user_id', $user->id)->first();

        $validator = Validator::make($input, [
            'test2' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if (isset($lifestyle)) {
            $lifestyle->test2 = $input['test2'];
            $lifestyle->save();
        } else{
            $lifestyle = new Lifestyle();
            $lifestyle->user_id = $user->id;
            $lifestyle->test2 = $input['test2'];
            $lifestyle->save();
        }
        return $this->sendResponse(new LifestyleResource($lifestyle), 'Lifestyle Updated successfully!');

    }

    public function ThirdLifestyle(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $lifestyle = Lifestyle::where('user_id', $user->id)->first();

        $validator = Validator::make($input, [
            'test3' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if (isset($lifestyle)) {
            $lifestyle->test3 = $input['test3'];
            $lifestyle->save();
        } else{
            $lifestyle = new Lifestyle();
            $lifestyle->user_id = $user->id;
            $lifestyle->test3 = $input['test3'];
            $lifestyle->save();
        }
        return $this->sendResponse(new LifestyleResource($lifestyle), 'Lifestyle Updated successfully!');

    }

    public function FourthLifestyle(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $lifestyle = Lifestyle::where('user_id', $user->id)->first();

        $validator = Validator::make($input, [
            'test4' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if (isset($lifestyle)) {
            $lifestyle->test4 = $input['test4'];
            $lifestyle->save();
        } else{
            $lifestyle = new Lifestyle();
            $lifestyle->user_id = $user->id;
            $lifestyle->test4 = $input['test4'];
            $lifestyle->save();
        }
        return $this->sendResponse(new LifestyleResource($lifestyle), 'Lifestyle Updated successfully!');



    }

    public function FifthLifestyle(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $lifestyle = Lifestyle::where('user_id', $user->id)->first();

        $validator = Validator::make($input, [
            'test5' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if (isset($lifestyle)) {
            $lifestyle->test5 = $input['test5'];
            $lifestyle->save();
        } else{
            $lifestyle = new Lifestyle();
            $lifestyle->user_id = $user->id;
            $lifestyle->test5 = $input['test5'];
            $lifestyle->save();
        }
        return $this->sendResponse(new LifestyleResource($lifestyle), 'Lifestyle Updated successfully!');

    }
}
