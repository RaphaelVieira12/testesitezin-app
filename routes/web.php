<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
//get mostrar
Route::get('/',[ContatoController::class,'site'])->name('site');
Route::get('/cadastrar',[ContatoController::class,'showFormContato'])->name('formulario-contato');
//post enviar dados
Route::post('/cadastrar',[ContatoController::class,'storeContato'])->name('cadastrar-contato');

Route::get('/todosContato',[ContatoController::class,'showGerenciador'])->name('todos-contato');
Route::delete('/deleteContato/{id}',[ContatoController::class,'destroy'])->name('delete-contato');
//partes do alterar
Route::get('/alterar/{id}',[ContatoController::class,'show'])->name('alterar-contato');
Route::put('/alterarBanco/{id}',[ContatoController::class,'update'])->name('alterarBanco-contato');