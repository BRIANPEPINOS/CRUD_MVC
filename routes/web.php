<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;


Route::get('/', function () {
    $articles = Article::latest()->take(12)->get(); // Trae los artículos más recientes
    return view('index', compact('articles'));
})->name('home');

// Rutas CRUD de artículos

//Rutas para listar articulos
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

//Rutas crear articulos
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

// Ruta para eliminar articulos
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

//Rutas para editar y actualizar
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');