<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Liste  des biens immobilier</h1>
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-3">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{ $article->url_img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->nom}}</h5>
                    <p class="card-text">{{ $article->desc}}</p>
                    <p class="card-text">{{ $article->cathegorie}}</p>
                    <p class="card-text">{{ $article->statut}}</p>
                    <p class="card-text">{{ $article->localisation}}</p>
                    <p class="card-text">{{ $article->date}}</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">voir detail</a>
                        <a href="#" class="btn btn-danger ms-auto">supprimer</a>
                        <a href="#" class="btn btn-primary">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    

        
   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>