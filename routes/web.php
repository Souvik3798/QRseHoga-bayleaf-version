<?php

use App\Http\Controllers\DishesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('admin');
    return view('login');
});
Route::post('/admin',[DishesController::class,'login'])->name('admin.login');
Route::get('/dish',[DishesController::class,'dish'])->middleware('admin');
Route::post('/add-dish',[DishesController::class,'create'])->middleware('admin');
Route::get('/edit/{id}',[DishesController::class,'editdish'])->middleware('admin');
Route::put('/update',[DishesController::class,'updatedish'])->middleware('admin');
Route::get('/delete/{id}',[DishesController::class,'deletedish'])->middleware('admin');
Route::get('/menu',[DishesController::class,'menu']);
Route::post('/menu',[DishesController::class,'menu']);
Route::get('details/{id}',[DishesController::class,'details']);
Route::get('/thumb/{id}',[DishesController::class,'thumb']);
Route::get('/img/{id}',[DishesController::class,'img']);
Route::post('/img',[DishesController::class,'imgchange']);
Route::post('/thumb',[DishesController::class,'thumbchange']);
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact',[DishesController::class,'contact']);
