<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


// specialty route
Route::group(['prefix' => 'newusers'], function () {
    Route::get('/get-medical-entities', [RegisterController::class,'getMedicalEntities']);
    Route::get('', [RegisterController::class,'getCalendar'])->name('get.calendar');
    Route::post('/createnewuser', [UserController::class, 'createUser'])->name('createnewuser');
});
