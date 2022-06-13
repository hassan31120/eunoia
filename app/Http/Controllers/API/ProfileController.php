<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return $this->sendError('User not found');
        }

        return $this->sendResponse(new UserResource($user), 'User found successfully');
    }


    public function update(Request $request, User $user)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'phone_no' => 'required',
            'gender' => 'required'
        ]);

        $password = Hash::make($input['password']);

        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if ($user->id != Auth::user()->id) {
            return $this->sendError('You dont have right to edit', $validator->errors());
        }

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $password;
        $user->age = $input['age'];
        $user->phone_no = $input['phone_no'];
        $user->gender = $input['gender'];
        $user->save();

        return $this->sendResponse(new UserResource($user), 'User Updated successfully!');
    }

    public function updateSurveyScore(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $validator = Validator::make($input, [
            'survey_score' => 'required'
        ]);


        if ($validator->fails()) {
            return $this->sendError('Validation Error !', $validator->errors());
        }

        if ($user->id != Auth::user()->id) {
            return $this->sendError('You dont have right to edit', $validator->errors());
        }

        $user->survey_score = $input['survey_score'];

        $user->save();

        return $this->sendResponse(new UserResource($user), 'Survey Score Updated successfully!');
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
