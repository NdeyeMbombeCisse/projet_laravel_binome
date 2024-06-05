<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
Route::get('modification/{id}',[CommentaireController::class,'modifier_commentaire']);
Route::post('modification/{id}',[CommentaireController::class,'enregistrer_commentaire']);




Route::get('/register',[ArticleController::class,'creer'])->name('register');
Route::post('/register',[ArticleController::class,'enregistrer'])->name('register.store');



Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('authentification',[AuthController::class,'authentification'])->name('authentification');
Route::post('logout',[AuthController::class,'logout'])->name('logout');



