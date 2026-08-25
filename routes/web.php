<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('post',[PostController::class,'index']);
Route::get('post/create',[PostController::class,'create']);
Route::post('post',[PostController::class,'store'])->name('store');
Route::get('post/show/{id}',[PostController::class,'show'])->name('show');

