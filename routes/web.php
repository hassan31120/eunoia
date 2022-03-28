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
    Route::get('/' ,[App\Http\Controllers\AdminUsersController::class, 'admin'])->name('admin');
    Route::get('users' ,[App\Http\Controllers\AdminUsersController::class, 'index'])->name('admin.users');
    Route::get('doctors' ,[App\Http\Controllers\AdminUsersController::class, 'doctors'])->name('admin.doctors');
    Route::get('users/create' ,[App\Http\Controllers\AdminUsersController::class, 'create'])->name('admin.user.create');
    Route::post('users/store' ,[App\Http\Controllers\AdminUsersController::class, 'store'])->name('admin.user.store');
    Route::get('users/edit/{id}' ,[App\Http\Controllers\AdminUsersController::class, 'edit'])->name('admin.user.edit');
    Route::put('users/update/{id}' ,[App\Http\Controllers\AdminUsersController::class, 'update'])->name('admin.user.update');
    Route::get('users/destroy/{id}' ,[App\Http\Controllers\AdminUsersController::class, 'destroy'])->name('admin.user.destroy');
});


