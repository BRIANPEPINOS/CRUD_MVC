<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // usa all() directamente (o tu método getAll() si existe)
    $articles = Article::all(); // o Article::getAll();

    // envía la variable "articles" a la vista
    return view('articles.index', compact('articles'));
    // equivalente: return view('articles.index')->with('articles', $articles)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request) {
        // El FormRequest ya valida; usa $request->validated()
        // Enviamos todos los datos recibidos sin validacion
        $data = $request->all();

        // Crea el registro (requiere $fillable en el modelo)
        $article = Article::create($data);

        // Redirige con mensaje flash
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
         return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
