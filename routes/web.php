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
    return view('home');
});

Route::get('/inner_page',[\App\Http\Controllers\pageController::class,'page_inner_page']);
Route::get('/portfolio-details',[\App\Http\Controllers\pageController::class,'page_portfolio_details']);
Route::get('/{id}',[App\Http\Controllers\pageController::class,'page_home_redirect']);
Route::post('/contact/submit',[\App\Http\Controllers\pageController::class,'page_sumbit_contact']);