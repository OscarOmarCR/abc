<?php

use App\Http\Controllers\ControllerGeneral;
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


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ControllerGeneral::class,'index'])->name('index');
Route::get('/about-us', [ControllerGeneral::class,'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [ControllerGeneral::class,'contactUs'])->name('contactUs');
Route::get('/our-services', [ControllerGeneral::class,'ourServices'])->name('ourServices');

