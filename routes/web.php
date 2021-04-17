<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
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


Route::get('/', [LivroController::class, 'index']);
Route::get('/livros', [LivroController::class, 'index'])->name('livros');
Route::get('/livros/{id}', [LivroController::class, 'livro'])->name('livro.form');

Route::post('/editar/{id}', [LivroController::class, 'editar'])->name('editar');
Route::get('/excluir/{id}', [LivroController::class, 'excluir'])->name('excluir');

Route::get('/cadastrar', function(){
    return view('form_livro');
})->name('cadastrar');

Route::post('/cadastrar', [LivroController::class, 'cadastro'])->name('cadastro');
