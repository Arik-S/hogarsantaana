<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //Ulimos id y que traiga 12
        $articles = Article::latest('id')->get()->take(12);
       
        return view('welcome', compact('articles'));
    }
}
