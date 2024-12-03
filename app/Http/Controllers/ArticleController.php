<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function getAllArticle(){

        $articles = Article::with('author', 'category')->get();
        // dd($articles);
        return view('main.home', ['articles' => $articles]);
    }

    public function getPopularArticle(){
        $articles = Article::with('author', 'category')->paginate(3);

        return view('main.popular', ['articles' => $articles]);
    }

    public function getArticleByID($id){
        $article = Article::with('author', 'category')->find($id);

        return view('main.articleDetail', ['article' => $article]);
    }
}
