<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('post',[PostController::class,'index']);
Route::get('post/create',[PostController::class,'create']);
Route::post('post',[PostController::class,'store'])->name('store');
Route::get('post/show/{id}',[PostController::class,'show'])->name('show');
