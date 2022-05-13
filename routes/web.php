<?php

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
    //user
    Route::get('/' ,[App\Http\Controllers\AdminUsersController::class, 'admin'])->name('admin');
    Route::get('users' ,[App\Http\Controllers\AdminUsersController::class, 'index'])->name('admin.users');
    Route::get('doctors' ,[App\Http\Controllers\AdminUsersController::class, 'doctors'])->name('admin.doctors');
    Route::get('users/create' ,[App\Http\Controllers\AdminUsersController::class, 'create'])->name('admin.user.create');
    Route::post('users/store' ,[App\Http\Controllers\AdminUsersController::class, 'store'])->name('admin.user.store');
    Route::get('users/edit/{id}' ,[App\Http\Controllers\AdminUsersController::class, 'edit'])->name('admin.user.edit');
    Route::put('users/update/{id}' ,[App\Http\Controllers\AdminUsersController::class, 'update'])->name('admin.user.update');
    Route::get('users/destroy/{id}' ,[App\Http\Controllers\AdminUsersController::class, 'destroy'])->name('admin.user.destroy');
    //Survey
    Route::get('surveys' ,[App\Http\Controllers\SurveyController::class, 'index'])->name('surveys');
    Route::get('survey/create' ,[App\Http\Controllers\SurveyController::class, 'create'])->name('survey.create');
    Route::post('Survey/store' ,[App\Http\Controllers\SurveyController::class, 'store'])->name('survey.store');
    Route::get('survey/edit/{id}' ,[App\Http\Controllers\SurveyController::class, 'edit'])->name('survey.edit');
    Route::put('survey/update/{id}' ,[App\Http\Controllers\SurveyController::class, 'update'])->name('survey.update');
    Route::get('survey/destroy/{id}' ,[App\Http\Controllers\SurveyController::class, 'destroy'])->name('survey.destroy');
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


