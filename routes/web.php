<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
Use App\Http\Controllers\TesteController;
Use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
}); */

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::prefix('/app')->middleware('autenticacao:padrao, visitante, p3, p4')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');

    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');

    Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');

    Route::get('/fornecedor', [FornecedoresController::class, 'index'])->name('app.fornecedor');

    Route::get('/produto', [ProdutoController::class, 'index'])->name('app.produto');
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
