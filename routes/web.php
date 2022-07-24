<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Models\Company;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
Route::get('/companies/show/{company}', [CompanyController::class, 'show']);
// Edit Company
Route::get('/companies/edit/{company}', [CompanyController::class, 'edit']);
// Update Company
Route::post('/companies/update/{company}', [CompanyController::class, 'update']);
// Destroy Company
Route::get('/companies/destroy/{company}', [CompanyController::class, 'destroy']);

// All Jobs
Route::get('/jobs', [JobsController::class, 'index']);
// Create Jobs
Route::get('/jobs/create/{id}', [JobsController::class, 'create']);
// Store Job
Route::post('/jobs/store' , [JobsController::class, 'store']);
//single Job
Route::get('/jobs/show/{jobs}', [JobsController::class, 'show']);

//destroy Job
Route::get('/jobs/destroy/{jobs}',[JobsController::class, 'destroy']);

// All User
Route::get('/users', [UserController::class, 'index']);
//Create User
Route::get('/users/create', [UserController::class, 'create']);
//Store user
Route::post('/users/store', [UserController::class, 'store']);
//Edit user
Route::get('/users/edit/{user}', [UserController::class, 'edit']);
// Update User
Route::post('/users/update/{user}', [UserController::class, 'update']);
//destroy User
Route::get('/users/destroy/{user}', [UserController::class, 'destroy']);



//Single User
Route::get('/users/{user}', [UserController::class, 'show']);
//login User
Route::get('/login',[UserController::class, 'login']);
// Create User
Route::get('/user/create',[UserController::class, 'create']);
//Store User
Route::post('user/store', [UserController::class, 'store']);
Auth::routes();
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');
