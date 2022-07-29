<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
    return view('Login');
});

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::post('/verificar', [UsersController::class, 'verificar'])->name('verificar');
Route::post('/saveUsuario', [UsersController::class, 'store'])->name('saveUsuario');
Route::post('/deleteUsuario', [UsersController::class, 'destroy'])->name('deleteUsuario');


// Route::resource('usuario', UsersController::class)->name('usuario');