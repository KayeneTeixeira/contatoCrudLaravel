<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listagem', [\App\Http\Controllers\ContatoController::class, 'listarContato'])->name('site.contato.listar');

Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'cadastroContato'])->name('site.contato.cadastro');

// Manda pro formulário de edição
Route::get('/edicao/{id}', [\App\Http\Controllers\ContatoController::class, 'editarContato'])->name('site.contato.editar');

// Manda os dados pra atualização 
Route::post('/update', [\App\Http\Controllers\ContatoController::class, 'updateContato'])->name('site.contato.alterar');

Route::get('/delete/{id}', [\App\Http\Controllers\ContatoController::class, 'excluirContato'])->name('site.contato.excluir');
