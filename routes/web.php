<?php

use App\Models\Company;
use App\Models\Jobs;
use App\Models\User;
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
// All User
Route::get('/users', function () {
    return view('user',['users' => User::all()]);
});
Route::get('/companys', function () {
    return view('companys',['companys' => Company::all()]);
});
Route::get('/jobs', function () {
    return view('jobs',['jobs' => Jobs::all()]);
});
