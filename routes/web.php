<?php

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

//vista con controlador, testController>clase index y valores desde la BD
Route::get('/test', [TestController::class, 'index']);

//vista con nombre
Route::get('/contacto', function () {
    return "contactame";
})->name('contacto');

//vista con datos desde el web
Route::get('/inicio', function () {

    $msj="saludo desde el back de laravel";

    $data = [
        'msj'=> $msj,
        'edad' => 15
    ];

    return view('inicio', $data);
});

