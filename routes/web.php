<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/e', function () {
    return view('welcome');
});

//User
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('Home');
Route::get('/sidmat-calendar', 'App\Http\Controllers\CalendarController@index')->name('Home-calendar');
Route::get('/sidmat/newrequest', 'App\Http\Controllers\NewRequestController@index')->name('Home-request');
Route::get('/sidmat/1_Junho/Editrequest', 'App\Http\Controllers\JunhoEditRequestController@index')->name('Home-junho-edit-request');


//Admin