<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->middleware('admin');

 Route::get('/company',[App\Http\Controllers\CompanyController::class,'index'])->middleware('admin');

 Route::get('/company/create',[App\Http\Controllers\CompanyController::class,'create']);
 Route::post('/company/create',[App\Http\Controllers\CompanyController::class,'store'])->name('company.store');

 Route::get('/company/{id}/edit',[App\Http\Controllers\CompanyController::class,'edit'])->name('company.edit');

  Route::post('/company/update',[App\Http\Controllers\CompanyController::class,'update'])->name('company.update');

  Route::get('/company/{id}/show',[App\Http\Controllers\CompanyController::class,'show'])->name('company.show');

 Route::get('sending-queue-emails', [App\Http\Controllers\CompanyController::class,'sendTestEmails']);