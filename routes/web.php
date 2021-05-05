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

Route::auth();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/','App\Http\Controllers\WelcomeController@index');

Route::get('/contact','App\Http\Controllers\ContactController@index');

Route::post('/contact', 'App\Http\Controllers\ContactController@store');

Route::get('/infos','App\Http\Controllers\InfosController@index');

Route::get('/habiter','App\Http\Controllers\HabiterController@index');

Route::post('/habiter/resultats','App\Http\Controllers\HabiterController@show');

Route::get('/investir','App\Http\Controllers\InvestirController@index');

Route::post('/investir/resultats','App\Http\Controllers\InvestirController@show');

// Route::get('/admin','App\Http\Controllers\AdminController@index');

Route::get('/add','App\Http\Controllers\AdminController@add')->middleware(['auth']);;

Route::post('/add', 'App\Http\Controllers\AdminController@store')->middleware(['auth']);;

Route::get('/biens/suppression/{id}', 'App\Http\Controllers\AdminController@destroy')->middleware(['auth']);;

Route::get('/bien/{bien}', 'App\Http\Controllers\HabiterController@showBien')->middleware(['auth']);;

