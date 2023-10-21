<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('getData',[HomeController::class,'getData']);
Route::get('insertData',[HomeController::class,'insertData']);
Route::get('updateData',[HomeController::class,'updateData']);
Route::get('deleteData',[HomeController::class,'deleteData']);
