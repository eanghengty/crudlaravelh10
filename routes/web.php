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

Auth::routes(['register'=>false]);


Route::get('post/{id}',[App\Http\Controllers\CategoriesController::class, 'show'])->name('layouts.show');
Route::get('/',[App\Http\Controllers\CategoriesController::class,'index'])->name('layouts.index');
Route::delete('/post/{id}',[App\Http\Controllers\CategoriesController::class,
'destroy'])->name('layouts.destroy')->middleware('auth');
Route::get('/create',[App\Http\Controllers\CategoriesController::class, 'create'])->name('layouts.create')->middleware('auth');
Route::post('/',[App\Http\Controllers\CategoriesController::class,'store'])->name('layouts.store')->middleware('auth');
