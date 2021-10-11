<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\loginController;

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


Route::get('/login', function () {
    return view('login');
})->name('login.view');

Route::post('/login', [loginController::class, 'logger'])
    ->name('login.logger');

Route::post('/logout', [loginController::class, 'logout'])
    ->name('login.logout');

Route::get('/register', function () {
    return view('register');
})->name('register.view');

Route::post('/usuario', [UsuarioController::class, 'create'])
    ->name('usuario.create');

Route::get('/usuarios', [UsuarioController::class, 'list'])
    ->name('usuario.list');
