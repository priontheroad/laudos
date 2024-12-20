<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProdutoEmbalagemController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\LaudoGeradoController;

// Rotas para a empresa
Route::resource('empresas', EmpresaController::class);
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresas.create');
Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');
Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');

// Rotas para produto/embalagem
Route::resource('embalagens', ProdutoEmbalagemController::class);

// Rotas para avaliação
Route::resource('avaliacoes', AvaliacaoController::class);

// Rotas para laudo 
Route::resource('laudos', LaudoGeradoController::class);
Route::get('/laudos/create', [LaudoGeradoController::class, 'create'])->name('laudos.create');
Route::post('/laudos', [LaudoGeradoController::class, 'store'])->name('laudos.store');