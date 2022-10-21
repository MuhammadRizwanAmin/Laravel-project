<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechenicController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;

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

Route::get('add_mechenic',[MechenicController::class,'add_mechenic']);
Route::get('add_car/{id}',[CarController::class,'add_car']);
Route::get('add_owner/{id}',[OwnerController::class,'add_owner']);

Route::get('show_owner/{id}',[OwnerController::class,'show_owner']);

