<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'tittle',
        'description',
        'content',
        'author',
        'date_created',
    ];
    public static function getAll(){
        return self::all();
    }

    public static function create(array $data): Article
    {
        $article = new self($data);
        $article->save();
        return $article;
    }
}
