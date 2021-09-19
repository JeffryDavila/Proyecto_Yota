<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gestionController;
use App\Http\Controllers\gestionClienteController;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/home/nuevaGestion',[gestionController::class, 'index'])->name('nuevaGestion.index');
    Route::post('/home',[gestionController::class, 'create'])->name('nuevaGestion.create');

    Route::post('/home/nuevaGestionCliente/{id_gestion}',[gestionClienteController::class, 'create'])->name('nuevaGestionCliente.create');
});