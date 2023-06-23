<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\TestController;
use Illuminate\Support\Facades\Route;
//forma uno
//use App\Http\Controllers\TestController;

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
//vista normal
Route::get('/', function () {
    return view('welcome');
});

//forma semi automatica de crearlas a base del controlador principal

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);

//forma manual de crear rutas

/* Route::get('post', [PostController::class, 'index']);
Route::get('post/{post}', [PostController::class, 'show']);
Route::get('post/create', [PostController::class, 'create']);
Route::get('post/{post}/edit', [PostController::class, 'edit']);

Route::post('post', [PostController::class, 'store']);
Route::put('post/{post}', [PostController::class, 'edit']);
Route::delete('post/{post}', [PostController::class, 'delete']); */
