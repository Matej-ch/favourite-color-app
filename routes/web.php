<?php

use App\Http\Controllers\ColorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'dashboard'],function () {

    Route::get('/colors',[ColorController::class,'index']);
    Route::get('/colors/new',[ColorController::class,'create']);
    Route::post('/colors/new',[ColorController::class,'store']);
    Route::get('/colors/{color}',[ColorController::class,'edit']);
    Route::post('/colors/{color}',[ColorController::class,'update']);
    Route::delete('/colors/{color}',[ColorController::class,'destroy']);

    Route::get('/settings',[UserController::class,'edit']);
    Route::post('/settings',[UserController::class,'update']);
});

Route::post('/visit/{color}',[VisitController::class,'store']);

    Route::get('{user}',[UserController::class,'show']);
