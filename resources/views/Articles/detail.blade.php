<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Les details de l'imobilier {{ $article->nom }}</h1>
    <div class="card mb-3" style="max-width: 2000px;">
        <div class="row g-0 ">
          <div class="col-md-4 ">
            <img src="{{ $article->url_img }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Nom du bien:{{ $article->nom }}</h5>
              <p class="card-text">{{ $article->desc }}</p>
              <p class="card-text">Statut :{{ $article->statut}}</p>
              <p class="card-text">Situation:{{ $article->localisation }}</p>
              <p class="card-text"><small class="text-body-secondary"> Date de publication:{{ $article->date }}</small></p>
              <p class="card-text"><small class="text-body-secondary"> Cathegorie:{{ $article->cathegorie }}</small></p>
            </div>
          </div>
        </div>
      </div>
      {{-- <a href="afficher_article" class="btn btn-primary">Modifier</a> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>