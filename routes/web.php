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
  
This project is the handiwork of Kwaku Hope from Ghana. Enjoy my email is
roreouel@yahoo.com/roreouel@gmail.com
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* ==========================================
* Timetable generator
========================================== */
Route::resource('timet', App\Http\Controllers\TimetableController::class);
Route::post('/searchsub',[App\Http\Controllers\TimetableController::class,'autoComplete'])->name('searchsub');
Route::get('/listt',[App\Http\Controllers\TimetableController::class,'display'])->name('listt');


/* ==========================================
* Subjects routes
==========================================  */
Route::resource('subs', App\Http\Controllers\SubjectController::class);


/* ==========================================
* Classes routes
==========================================  */
Route::resource('classes', App\Http\Controllers\ClassesController::class);