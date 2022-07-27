<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::get('/',[userController::class,'select']);
Route::view('insert','insert');
Route::post('insertData',[userController::class,'insertData']);
Route::view('delete','delete');

Route::post('deleteData',[userController::class,'deleteData']);
Route::view('update','update');

Route::post('updateData',[userController::class,'updateData']);



