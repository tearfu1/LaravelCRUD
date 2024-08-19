<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgeController;

Route::get('/age', [AgeController::class, 'index']);

use App\Http\Controllers\AloneController;

Route::get('/alone', [AloneController::class, 'index']);

use App\Http\Controllers\CarController;

Route::get('/car', [CarController::class, 'index']);

use App\Http\Controllers\CityController;

Route::get('/city', [CityController::class, 'index']);

use App\Http\Controllers\MyPlaceContoller;

Route::get('/my_page', [MyPlaceContoller::class, 'index']);

use App\Http\Controllers\NameController;

Route::get('/name', [NameController::class, 'index']);

use App\Http\Controllers\SexController;

Route::get('/sex', [SexController::class, 'index']);

use App\Http\Controllers\WorkController;

Route::get('/work', [WorkController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

