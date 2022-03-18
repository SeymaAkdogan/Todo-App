<?php

use App\Http\Controllers\ActivityController;
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


Route::get('/', [ActivityController::class,'index']);
Route::get('getAll', [ActivityController::class,'getAll']);
Route::post('create-activity', [ActivityController::class,'createActivity']);
Route::get('editActivity/{activityId}',[ActivityController::class,'editActivityPage']);
Route::post('editActivity/{activityId}',[ActivityController::class,'editActivity']);
Route::get('deleteActivity/{activityId}',[ActivityController::class,'deleteActivity']);
