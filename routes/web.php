<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\servicecontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\testimonialcontroller;
use App\Http\Controllers\errorcontroller;
use App\Http\Controllers\teamcontroller;
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

Route::get('/',[homecontroller::class,'index']);
Route::get('/about_us',[aboutcontroller::class,'index']);
Route::get('/service',[servicecontroller::class,'index']);
Route::get('/contact',[contactcontroller::class,'index']);
Route::get('/booking',[bookingcontroller::class,'index']);
Route::get('/testimonial',[testimonialcontroller::class,'index']);
Route::get('/404',[errorcontroller::class,'index']);
Route::get('/team',[teamcontroller::class,'index']);
