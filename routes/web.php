<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController; 
use App\Http\Controllers\AgendaController; 
use App\Http\Controllers\UnidadeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MedicoController::class, 'index']);

Route::prefix('medico')->group(function () {
    Route::get('/agenda/{id}', [AgendaController::class, 'index'])->name('medico.agenda');
    Route::get('/', [MedicoController::class, 'index'])->name('medico.index');
    Route::get('/create', [MedicoController::class, 'create'])->name('medico.create');
    Route::post('/', [MedicoController::class, 'store'])->name('medico.store');
    Route::get('/{medico}', [MedicoController::class, 'show'])->name('medico.show');
    Route::get('/{medico}/edit', [MedicoController::class, 'edit'])->name('medico.edit');
    Route::put('/{medico}', [MedicoController::class, 'update'])->name('medico.update');
    Route::delete('/{medico}', [MedicoController::class, 'destroy'])->name('medico.destroy');
    Route::get('/search', [MedicoController::class, 'search'])->name('medico.search');
});


Route::prefix('unidade')->group(function () {
    Route::get('/busca/{id}', [MedicoController::class, 'search'])->name('medico.busca');
    
    // Rotas CRUD para unidades
    Route::get('/', [UnidadeController::class, 'index'])->name('unidade.index');
    Route::get('/create', [UnidadeController::class, 'create'])->name('unidade.create');
    Route::post('/', [UnidadeController::class, 'store'])->name('unidade.store');
    Route::get('/{unidade}', [UnidadeController::class, 'show'])->name('unidade.show');
    Route::get('/{unidade}/edit', [UnidadeController::class, 'edit'])->name('unidade.edit');
    Route::put('/{unidade}', [UnidadeController::class, 'update'])->name('unidade.update');
    Route::delete('/{unidade}', [UnidadeController::class, 'destroy'])->name('unidade.destroy');
});