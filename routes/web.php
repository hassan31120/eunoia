<?php

use App\Http\Controllers\AdminActivitiesController;
use App\Http\Controllers\AdminDiseasesController;
use App\Http\Controllers\AdminDoctorsController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function(){

    Route::get('/' ,[AdminUsersController::class, 'admin'])->name('admin');
    Route::get('users' ,[AdminUsersController::class, 'index'])->name('admin.users');
    Route::get('user/create' ,[AdminUsersController::class, 'create'])->name('admin.user.create');
    Route::post('user/store' ,[AdminUsersController::class, 'store'])->name('admin.user.store');
    Route::get('user/edit/{id}' ,[AdminUsersController::class, 'edit'])->name('admin.user.edit');
    Route::put('user/update/{id}' ,[AdminUsersController::class, 'update'])->name('admin.user.update');
    Route::get('user/destroy/{id}' ,[AdminUsersController::class, 'destroy'])->name('admin.user.destroy');

    Route::get('doctors' ,[AdminDoctorsController::class, 'index'])->name('admin.doctors');
    Route::get('doctor/create' ,[AdminDoctorsController::class, 'create'])->name('admin.doctor.create');
    Route::post('doctor/store' ,[AdminDoctorsController::class, 'store'])->name('admin.doctor.store');
    Route::get('doctor/edit/{id}' ,[AdminDoctorsController::class, 'edit'])->name('admin.doctor.edit');
    Route::put('doctor/update/{id}' ,[AdminDoctorsController::class, 'update'])->name('admin.doctor.update');
    Route::get('doctor/destroy/{id}' ,[AdminDoctorsController::class, 'destroy'])->name('admin.doctor.destroy');

    Route::get('diseases', [AdminDiseasesController::class, 'index'])->name('amdin.diseases');
    Route::get('disease/create' ,[AdminDiseasesController::class, 'create'])->name('admin.disease.create');
    Route::post('disease/store' ,[AdminDiseasesController::class, 'store'])->name('admin.disease.store');
    Route::get('disease/edit/{id}' ,[AdminDiseasesController::class, 'edit'])->name('admin.disease.edit');
    Route::put('disease/update/{id}' ,[AdminDiseasesController::class, 'update'])->name('admin.disease.update');
    Route::get('disease/destroy/{id}' ,[AdminDiseasesController::class, 'destroy'])->name('admin.disease.destroy');

    Route::get('activities', [AdminActivitiesController::class, 'index'])->name('amdin.activities');
    Route::get('activity/create' ,[AdminActivitiesController::class, 'create'])->name('admin.activity.create');
    Route::post('activity/store' ,[AdminActivitiesController::class, 'store'])->name('admin.activity.store');
    Route::get('activity/edit/{id}' ,[AdminActivitiesController::class, 'edit'])->name('admin.activity.edit');
    Route::put('activity/update/{id}' ,[AdminActivitiesController::class, 'update'])->name('admin.activity.update');
    Route::get('activity/destroy/{id}' ,[AdminActivitiesController::class, 'destroy'])->name('admin.activity.destroy');

    Route::get('settings/{id}', [AdminSettingsController::class, 'index'])->name('admin.settings');
    Route::post('update/{id}', [AdminSettingsController::class, 'update'])->name('admin.settings.update');

    //Survey
    Route::get('surveys' ,[App\Http\Controllers\SurveyController::class, 'index'])->name('surveys');
    Route::get('survey/create' ,[App\Http\Controllers\SurveyController::class, 'create'])->name('survey.create');
    Route::post('Survey/store' ,[App\Http\Controllers\SurveyController::class, 'store'])->name('survey.store');
    Route::get('survey/edit/{id}' ,[App\Http\Controllers\SurveyController::class, 'edit'])->name('survey.edit');
    Route::put('survey/update/{id}' ,[App\Http\Controllers\SurveyController::class, 'update'])->name('survey.update');
    Route::get('survey/destroy/{id}' ,[App\Http\Controllers\SurveyController::class, 'destroy'])->name('survey.destroy');
    Route::get('surveys/questions/{id}' ,[App\Http\Controllers\SurveyController::class, 'survey_question'])->name('survey.questions');
    //answer
    Route::get('answers' ,[App\Http\Controllers\AnswerController::class, 'index'])->name('answers');
    Route::get('answer/create' ,[App\Http\Controllers\AnswerController::class, 'create'])->name('answer.create');
    Route::post('answer/store' ,[App\Http\Controllers\AnswerController::class, 'store'])->name('answer.store');
    Route::get('answer/edit/{id}' ,[App\Http\Controllers\AnswerController::class, 'edit'])->name('answer.edit');
    Route::put('answer/update/{id}' ,[App\Http\Controllers\AnswerController::class, 'update'])->name('answer.update');
    Route::get('answer/destroy/{id}' ,[App\Http\Controllers\AnswerController::class, 'destroy'])->name('answer.destroy');
    //Question
    Route::get('questions' ,[App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
    Route::get('question/create' ,[App\Http\Controllers\QuestionController::class, 'create'])->name('question.create');
    Route::post('question/store' ,[App\Http\Controllers\QuestionController::class, 'store'])->name('question.store');
    Route::get('question/edit/{id}' ,[App\Http\Controllers\QuestionController::class, 'edit'])->name('question.edit');
    Route::put('question/update/{id}' ,[App\Http\Controllers\QuestionController::class, 'update'])->name('question.update');
    Route::get('question/destroy/{id}' ,[App\Http\Controllers\QuestionController::class, 'destroy'])->name('question.destroy');
});


