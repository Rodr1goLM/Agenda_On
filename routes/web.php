<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController; 
use App\Http\Controllers\AgendaController; 


// Route::get('/', function () {
//     return view('welcome');
// });

Route:: get('/', [MedicoController::class, 'index']);

Route::prefix('medico')->group(function () {
    Route:: get('/agenda/{id}', [AgendaController::class, 'index'])->name('medico.agenda');
});

Route::prefix('unidade')->group(function () {
    Route:: get('/busca/{id}', [MedicoController::class, 'search'])->name('medico.busca');
});