<?php

use App\Http\Controllers\employeecontroller;
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

Route::get('/',[employeecontroller::class,'index']);
Route::get('add-employee',[employeecontroller::class,'create']);
Route::get('edit-data/{id}',[employeecontroller::class,'update']);
Route::post('add-employee',[employeecontroller::class,'store']);
Route::put('edit-data/{id}',[employeecontroller::class,'edit']);
Route::get('delete-data/{id}',[employeecontroller::class,'delete']);
