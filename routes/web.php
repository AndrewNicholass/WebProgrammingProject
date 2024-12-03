<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ArticleController::class, 'getAllArticle'])->name('homePage');
Route::get('/category/{id}', [CategoryController::class, 'getCategoryByID'])->name('categoryPage');
Route::get('/writer', [AuthorController::class, 'getAllAuthor'])->name('writerPage');
Route::get('/popular', [ArticleController::class, 'getPopularArticle'])->name('popularPage');
Route::get('/about', function() {
    return view('main.about');
})->name('aboutPage');
Route::get('/articleDetail/{id}', [ArticleController::class, 'getArticleByID'])->name('articleDetailPage');
Route::get('/writerDetail/{id}', [AuthorController::class, 'getAuthorByID'])->name('writerDetailPage');
