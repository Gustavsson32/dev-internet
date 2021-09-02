<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JogadorController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', [JogadorController::class, 'index'])->name('jogador');

Route::get('jogador/inserir', [JogadorController::class, 'create'])->name('jogador.inserir');
Route::get('jogador/{id}', [JogadorController::class, 'view'])->name('jogador.descricao');
Route::get('jogador/', [JogadorController::class, 'index'])->name('jogador');
Route::post('jogador/', [JogadorController::class, 'insert'])->name('jogador.gravar');
Route::get('jogador/{jog}/edit', [JogadorController::class, 'edit'])->name('jogador.editar');
Route::put('jogador/{jogador}/edit', [JogadorController::class, 'update'])->name('jogador.update');
Route::get('jogador/{jog}/delete', [JogadorController::class, 'delete'])->name('jogador.deletar');
Route::get('login', [UsuariosController::class,'index'])->name('usuario.index');
Route::post('login', [UsuariosController::class,'login'])->name('usuario.login');
Route::get('logout', [UsuariosController::class,'logout'])->name('usuario.logout');
