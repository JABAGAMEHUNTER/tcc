<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    ProdutorController,
    FeiranteController};
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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [ProdutorController::class, 'index'])->middleware(['auth'])->name('feira.index');//vai para o index
Route::get('/index', [ProdutorController::class, 'index'])->middleware(['auth'])->name('feira.index');
Route::any('/produtos/search', [ProdutorController::class, 'search'])->middleware(['auth'])->name('produtos.search');
Route::get('/produtos', [ProdutorController::class, 'index'])->middleware(['auth'])->name('produtos.index');
Route::get('/produtos/create', [ProdutorController::class, 'create'])->middleware(['auth'])->name('produtos.create');//cria novo produto
Route::post('/produtos', [ProdutorController::class, 'store'])->middleware(['auth'])->name('produtos.store');
Route::get('/produtos/{id}', [ProdutorController::class, 'show'])->middleware(['auth'])->name('produtos.show');
Route::delete('/produtos/{id}',[ProdutorController::class, 'destroy'])->middleware(['auth'])->name('produtos.destroy');
Route::get('produtos/edit/{id}', [ProdutorController::class, 'edit'])->middleware(['auth'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutorController::class, 'update'])->middleware(['auth'])->name('produtos.update');

Route::get('/categorias', [ProdutorController::class, 'categorias'])->middleware(['auth'])->name('feira.categorias');
Route::get('/produtores', [ProdutorController::class, 'produtores'])->middleware(['auth'])->name('feira.produtores');
Route::get('/userconfig', [ProdutorController::class, 'userconfig'])->middleware(['auth'])->name('feira.userconfig');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
