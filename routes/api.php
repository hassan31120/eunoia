<?php

use App\Http\Controllers\API\ActivitiesController;
use App\Http\Controllers\API\ApianswerController;
use App\Http\Controllers\API\ApiquestionController;
use App\Http\Controllers\API\ApisurveyController;
use App\Http\Controllers\API\AppointmentsController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DiseaseController;
use App\Http\Controllers\API\ProfileController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('checkBookDate', [AppointmentsController::class, 'checkBookDate']);
Route::get('SplitTime', [AppointmentsController::class, 'SplitTime']);


// Route::put('updatedata/{id}', [ProfileController::class, 'update']);

Route::resource('diseases', DiseaseController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('users', ProfileController::class);
Route::resource('questions', ApiquestionController::class);
Route::resource('answers', ApianswerController::class);
Route::resource('surveys', ApisurveyController::class);
Route::get('survey/question/{id}',[ApisurveyController::class,'survey_question']);



