<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
//use App\Http\Controllers\Dashboard\WebmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Middleware\SetLang;
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

Route::get('/', [HomeController::class,'index'])->name('home');




//Admin Home
Route::get('/adminHome', [DashboardController::class, 'index'])->name('adminHome');

//Auth routes
Route::Group(['prefix' => 'admin'], function () {
   // Authentication Routes...
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});



//webmails routes
Route::resource('webmails',Dashboard\WebmailController::class);

//services routes
Route::resource('services',Dashboard\ServiceController::class);

//features routes
Route::resource('features',Dashboard\FeatureController::class);

//Setting routes
Route::resource('settings',Dashboard\SettingController::class);
