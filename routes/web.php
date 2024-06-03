<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ajouter_article',[ArticleController::class,'ajouter_article']);
Route::post('sauvegarder_article',[ArticleController::class,'sauvegarder_article']);
Route::get('afficher_article',[ArticleController::class,'afficher_article']);
Route::get('supprimer/{id}',[ArticleController::class,'supprimer_article']);
Route::get('modifier/{id}',[ArticleController::class,'modifier_article']);
Route::post('modifier/{id}',[ArticleController::class,'sauvegarder_modification']);
Route::get('detail/{id}',[ArticleController::class,'detail_article']);
Route::post('/ajouter_commentaire',[ArticleController::class,'sauvegarder_commentaire']);
Route::get('/supprimer_commentaire/{id}',[ArticleController::class,'supprimer_commentaire']);






