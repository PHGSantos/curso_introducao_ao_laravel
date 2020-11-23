<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');

Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('site.login.entrar');//auth
Route::get('/login/sair', [LoginController::class, 'sair'])->name('site.login.sair');//auth

//setar rota definindo controller (sem apelido ainda)
Route::get('/contato/{id?}', [ContatoController::class, 'index']);
Route::post('/contato', [ContatoController::class, 'criar']);
Route::put('/contato', [ContatoController::class, 'editar']);

//só acessa essas rotas quem estiver logado
Route::middleware('auth')->group(function(){
   //setar rota definindo apelido: ajudar a configurar as rotas mais facilmente/user friendly

    Route::get('admin/cursos', [CursoController::class, 'index'])->name('admin.cursos');
    Route::get('admin/cursos/adicionar',  [CursoController::class, 'adicionar'])->name('admin.cursos.adicionar');
    Route::post('admin/cursos/salvar', [CursoController::class, 'salvar'])->name('admin.cursos.salvar');
    Route::get('admin/cursos/editar/{id}', [CursoController::class, 'editar'])->name('admin.cursos.editar');
    Route::put('admin/cursos/atualizar/{id}', [CursoController::class, 'atualizar'])->name('admin.cursos.atualizar');
    Route::get('admin/cursos/deletar/{id}', [CursoController::class, 'deletar'])->name('admin.cursos.deletar');
});