<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function getAllAuthor(){
        $authors = Author::with('articles')->get();

        return view('main.writer', ['authors' => $authors]);
    }

    public function getAuthorByID($id){
        $author = Author::with('articles')->find($id);

        return view('main.writerDetail', ['author' => $author]);
    }
}