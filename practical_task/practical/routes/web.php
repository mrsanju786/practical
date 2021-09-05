<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', function () {
    return view('jobform');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/applyjob', [App\Http\Controllers\JobController::class, 'store'])->name('applyjob');

Route::get('/jobedit/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('jobedit.id')->middleware('auth');

Route::post('/jobupdate/{id}', [App\Http\Controllers\JobController::class, 'update'])->name('jobupdate.id')->middleware('auth');

Route::get('/jobdelete/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('jobdelete.id')->middleware('auth');
