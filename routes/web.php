<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController ; 

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
    return view('index');
});
//Route::get('/MyClients',[ClientsController::class,'index']);



Route::resource('/MyClients',ClientsController::class) ; 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
