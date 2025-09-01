<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeadminController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/works',[HomeController::class,'works'])->name('works');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[OrderController::class,'SendOrder'])->name('contact');


// Admin's
Route::get('/home',[HomeadminController::class,'index'])->name('homeadmin');





