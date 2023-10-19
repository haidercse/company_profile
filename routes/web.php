<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\frontend\IndexController;
use Illuminate\Support\Facades\Route;

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
// backend 
Route::group(['prefix'=>'admin'], function(){
    Route::get('/dashboard',[BackendController::class,'index']);
});
// frontend 
Route::get('/',[IndexController::class,'index'])->name('home');
Route::get('about',[IndexController::class,'about'])->name('about');
Route::get('features',[IndexController::class,'features'])->name('features');
Route::get('testomonials',[IndexController::class,'testomonials'])->name('testomonials');
Route::get('pricing',[IndexController::class,'pricing'])->name('pricing');
Route::get('services',[IndexController::class,'services'])->name('services');
Route::get('contact',[IndexController::class,'contact'])->name('contact');
Route::get('portfolio',[IndexController::class,'portfolio'])->name('portfolio');
