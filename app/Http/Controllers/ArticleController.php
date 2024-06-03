<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouter_article(){
        return view('Articles.ajouter');
    }

    public function sauvegarder_article(Request $request){
        Article::create($request->all());
        return redirect()->back();
    }
}
