<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'dashboard'],function () {

    Route::get('/colors','ColorController@index');
    Route::get('/colors/new','ColorController@create');
    Route::post('/colors/new','ColorController@store');
    Route::get('/colors/{color}','ColorController@edit');
    Route::post('/colors/{color}','ColorController@update');
    Route::delete('/colors/{color}','ColorController@destroy');

    Route::get('/settings','UserController@edit');
    Route::post('/settings','UserController@update');
});

Route::post('/visit/{color}','VisitController@store');

Route::get('/{user}','UserController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
