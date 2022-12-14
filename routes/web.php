<?php

use Illuminate\Support\Facades\Route;

//include AdminController
use  App\Http\Controllers\AdminController;
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
    return view('user.dashboard');
});
//Route::get('/',[\App\Http\Controllers\AdminController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'index'])->name('dashboard');
});
