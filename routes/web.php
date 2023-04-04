<?php

use App\Http\Controllers\PostController;
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
// */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts',[PostController::class, 'index']);
Route::get('post/create',[PostController::class, 'create']);
Route::post('post/store',[PostController::class, 'store']);
Route::get('post/edit/{id}',[PostController::class, 'edit']);
Route::post('post/update/{id}',[PostController::class, 'update']);
Route::get('post/show/{id}',[PostController::class, 'show']);
Route::delete('post/delete/{id}',[PostController::class, 'destroy']);


// Route::resource('posts',[PostController::class]);