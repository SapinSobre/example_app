<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::view('/', 'indexHome');



Route::get('/helloYou', [HomeController::class, 'helloYou']);



Route::put('/coucou', function () {
    return view('coucou', ['name' => 'Cucu']);
});

Route::get('/laravel', function () {
    return view('welcome');
});