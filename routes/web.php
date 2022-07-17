<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Models\Company;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
    return view('index');
});

// All Companies


Route::get('/companies',[CompanyController::class,'index']);

// All Jobs
Route::get('/jobs',[JobsController::class,'index']);



// All User
Route::get('/users', [UserController::class,'index']);
//Single USer
Route::get('/users/{id}',[UserController::class,'show']);
