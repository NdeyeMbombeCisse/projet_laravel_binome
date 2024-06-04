<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Liste  des biens immobilier</h1>
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-3">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{ $article->url_img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->nom}}</h5>
                    <p class="card-text">{{ Str::limit ($article->desc,30)}}</p>
                    {{-- <p class="card-text">cathegorie: {{ $article->cathegorie}}</p> --}}
                    {{-- <p class="card-text"> Statut:{{ $article->statut}}</p> --}}
                    <p class="card-text">Localisation:{{ $article->localisation}}</p>
                    <p class="card-text">Date publication:{{ $article->date}}</p>
                    <div class="d-flex">
                        <a href="detail/{{ $article->id}}" class="btn btn-primary">voir detail</a>
                        <a href="supprimer/{{ $article->id}}" class="btn btn-danger ms-auto">supprimer</a>
                        <a href="modifier/{{ $article->id}}" class="btn btn-primary">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <a href="#" onclick="document.getElementById('logout-form').submit()"><form action="logout" method="POST" id="logout-form">@csrf</form>Se deconnecter</a>

    <a href="ajouter_article" class="btn btn-primary">Ajouter</a>

    
    

        
   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>