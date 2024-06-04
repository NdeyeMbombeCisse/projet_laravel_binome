<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ArticleController extends Controller
{
    public function ajouter_article(){
        return view('Articles.ajouter');
    }

    public function sauvegarder_article(Request $request){
        $request->validate([
            'nom'=>'required',
            'desc'=>'required',
            'cathegorie'=>'required',
            'date'=>'required',
            'statut'=>'required',
            'localisation'=>'required',
            'url_img'=>'required',
        ]);
        
        Article::create($request->all());
        return redirect('afficher_article');
    }

    public function afficher_article(){
        $articles=Article::all();
        return view('Articles.afficher',compact('articles'));
    }
    public function supprimer_article($id){
        $article=Article::find($id);
        $article->delete();
        return redirect()->back();
    }
    public function modifier_article ($id){
        $article=Article::find($id);
        return view('Articles.modifier',compact('article'));
    }
    

    public function sauvegarder_modification(Request $request, $id) {

        $request->validate([
            'nom'=>'required',
            'desc'=>'required',
            'cathegorie'=>'required',
            'date'=>'required',
            'statut'=>'required',
            'localisation'=>'required',
            'url_img'=>'required',
        ]);
        $article = Article::find($id);
        $article->update($request->all());
        return redirect('afficher_article');    
}
  public function detail_article($id){
    $user=User::find($id);
    $article=Article::find($id);
    $commentaires = $article->commentaires; 
    $commentaires = $user->commentaires; 
    return  view('Articles.detail',compact('article','user','commentaires'));
  }

  public function sauvegarder_commentaire(Request $request){
    Commentaire::create($request->all());
    return redirect()->back();
  }

  public function supprimer_commentaire($id){
    $commentaire=Commentaire::find($id);
    $commentaire->delete();
    return redirect()->back();
  }
      // Partie Authentification
  
    public function creer()
    {
      return view('Auth.register');
    } 


    public function enregistrer(Request $request)
    {
        $user= User::create($request->all());


        auth()->login($user);
     return redirect("afficher_article");

     }
}
