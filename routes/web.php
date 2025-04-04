<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
Use App\Http\Controllers\TesteController;
Use App\Http\Controllers\FornecedoresController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
}); */

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', function() { return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});


/* verbo http

get
post
put
patch
delete
options

*/
