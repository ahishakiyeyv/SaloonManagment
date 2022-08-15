<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','App\Http\Controllers\AccueilController@accueil');


//START SERVICE
Route::get('service','App\Http\Controllers\ServiceController@getservice');


//START PROPOS
Route::get('propos','App\Http\Controllers\ProposController@getpropos');


//START CONTACT
Route::get('contact','App\Http\Controllers\ContactController@getcontact');