<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LogsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Admin;

Route::get('/', function(){
    return view('index');
})->name('/');

Route::get('contacto', function(){
    return view('contacto');
})->name('contacto');

Route::get('entrenadores', function(){
    return view('entrenadores');
})->name('entrenadores');

Route::get('horarios', function(){
    return view('horarios');
})->name('horarios');

Route::get('precios', function(){
    return view('precios');
})->name('precios');

Route::get('desarrolladores', function(){
    return view('desarrolladores');
})->name('desarrolladores');

Route::get('login', function(){
    return view('auth.login');
})->name('login');

Route::get('registrar', function(){
    return view('auth.register');
})->name('registrar');


Route::get('administracion', function(){
    return view('admin.panelprincipal');
})->name('administracion')->middleware(Admin::class);

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->middleware(Admin::class);

Route::post('iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');
Route::get('cerrar-sesion', [LogoutController::class, 'perform'])->name('cerrar-sesion');
Route::post('registrar-usuario', [RegisterController::class, 'register'])->name('registrar-usuario');
Route::get('logs-accesos', [LogsController::class, 'ViewLogsAccesos'])->name('logs-accesos')->middleware(Admin::class);
Route::get('logs-registros', [LogsController::class, 'ViewLogsRegistros'])->name('logs-registros')->middleware(Admin::class);
Route::get('clean-accesos', [LogsController::class, 'CleanAccesos'])->name('clean-accesos')->middleware(Admin::class);
Route::get('clean-registros', [LogsController::class, 'CleanRegistros'])->name('clean-registros')->middleware(Admin::class);
