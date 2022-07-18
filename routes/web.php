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
Route::get('/companies', [CompanyController::class, 'index']);
//Create Company
Route::get('/companies/create', [CompanyController::class, 'create']);
//Store Company
Route::post('/companies/store', [CompanyController::class, 'store']);
//single Company
Route::get('/companies/show/{id}', [CompanyController::class, 'show']);
// Edit Company
Route::get('/companies/edit/{id}', [CompanyController::class, 'edit']);
// Update Company
Route::post('/companies/update/{id}', [CompanyController::class, 'update']);
// Destroy Company
Route::get('/companies/destroy/{id}', [CompanyController::class, 'destroy']);

// All Jobs
Route::get('/jobs', [JobsController::class, 'index']);


// All User
Route::get('/users', [UserController::class, 'index']);
//Create User
Route::get('/users/create', [UserController::class, 'create']);
//Store user
Route::post('/users/store', [UserController::class, 'store']);
//Edit user
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
//destroy User
Route::get('/users/destroy/{id}', [UserController::class, 'destroy']);

//Single User
Route::get('/users/{id}', [UserController::class, 'show']);

