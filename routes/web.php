<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function(){
    return view('home.index');
})->name('/');

Route::get('contacto', function(){
    return view('home.contacto');
})->name('contacto');

Route::get('desarrolladores', function(){
    return view('home.desarrolladores');
})->name('desarrolladores');

Route::get('login', function(){
    return view('auth.login');
})->name('login');

Route::get('registrar', function(){
    return view('auth.register');
})->name('registrar');

Route::post('iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');
Route::get('cerrar-sesion', [LogoutController::class, 'perform'])->name('cerrar-sesion');
Route::post('registrar-usuario', [RegisterController::class, 'register'])->name('registrar-usuario');