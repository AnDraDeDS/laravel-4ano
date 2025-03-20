<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');
Route::get('/adocao', [App\Http\Controllers\Adocao::class, 'adocao']);
Route::get('/detalhes-animal', [App\Http\Controllers\DetalhesAnimal::class, 'detalhesAnimal']);
Route::get('/listar-animais', [App\Http\Controllers\ListarAnimais::class, 'listarAnimais']);
Route::get('/login', [App\Http\Controllers\Login::class, 'login']);
Route::get('/registro', [App\Http\Controllers\Registro::class, 'registro']);

