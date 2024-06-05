<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function modifier_commentaire($id){
        $commentaire=Commentaire::find($id);
        $user=User::find($id);
        $article = Article::find($id);
       return view('Commentaires.modifier_commentaire',compact('commentaire','article','user'));
     }
   
     public function enregistrer_commentaire(Request $request,$id){
      $request->validate([
        'contenu'=>'required',
        'date'=>'required',
        'auteur'=>'required',

      ]);
      $commentaire = Commentaire::find($id);
      $commentaire->update($request->all());
        return redirect('detail/'.$commentaire->article_id);
    }
}
