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
        ],[
          
            'nom.required'=>'le  nom est recquis',
            'desc.required'=>'la  description est recquise',
            'cathegorie.required'=>'la  cathegorie est recquise',
            'date.required'=>'la  date est recquise',
            'statut.required'=>'le  statut est recquis',
            'localisation.required'=>'la  localisation est recquise',
            'url_img.required'=>'l\'image est recquise',
    ]
       
      );
        
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
        ],
        [
          
          'nom.required'=>'le  nom est recquis',
          'desc.required'=>'la  description est recquise',
          'cathegorie.required'=>'la  cathegorie est recquise',
          'date.required'=>'la  date est recquise',
          'statut.required'=>'le  statut est recquis',
          'localisation.required'=>'la  localisation est recquise',
          'url_img.required'=>'l\'image est recquise', ]
      );
        $article = Article::find($id);
        $article->update($request->all());
        return redirect('afficher_article');    
}
  public function detail_article($id){
    $article=Article::find($id);
    $commentaires = $article->commentaires; 
    return  view('Articles.detail',compact('article','commentaires'));
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
      return view('Auths.register');
    } 


    public function enregistrer(Request $request)
    {
      $request->validate([
        'name'=>'required|string',
        'email'=>'required|Email',
        'password'=>'required|string'

      ],
    [
      'name.required'=>'le prenom et nom sont recquis',
      'email.required'=>'le email est recquis ',
      'password.required'=>'le password est recquis ',
    ]);
        $user= User::create($request->all());


        auth()->login($user);
     return redirect("afficher_article");

     }

     
}
