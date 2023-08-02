<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;

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
    $entry= Http::get('http://192.168.1.10:8070/material');
    $apiArray = $entry->json();
    return view('welcome', ['apiArray' => $apiArray]);
});

//User

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('Home');
Route::get('/sidmat-calendar', 'App\Http\Controllers\CalendarController@index')->name('Home-calendar');
Route::get('/sidmat/newrequest', 'App\Http\Controllers\NewRequestController@index')->name('Home-request');
Route::get('/sidmat/stock', 'App\Http\Controllers\StockController@index')->name('Home-stock');
Route::get('/sidmat/pendente', 'App\Http\Controllers\PendenteController@index')->name('Home-pendente');
Route::get('/sidmat/enviado', 'App\Http\Controllers\SentController@index')->name('Home-enviado');
Route::get('/sidmat/cancelado', 'App\Http\Controllers\AbortedController@index')->name('Home-cancelado');
Route::get('/sidmat/Editrequest', 'App\Http\Controllers\JunhoEditRequestController@index')->name('Home-junho-edit-request');

//Admin
