<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ajouter_article',[ArticleController::class,'ajouter_article']);
Route::post('sauvegarder_article',[ArticleController::class,'sauvegarder_article']);
Route::get('afficher_article',[ArticleController::class,'afficher_article']);
