<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
      <h1 class="text-center">Ecrivez-nous</h1>
      <form class="container" action="{{ url('modification/'.$commentaire->id) }}" method="POST">
        @csrf
        <input type="hidden" name="article_id" value="{{ $commentaire->article_id}}">
        <div class="mb-3">
          <label for="contenu" class="form-label">commentez</label>
          <input type="text" class="form-control" id="contenu"  name="contenu"  value="{{ $commentaire->auteur}}">
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">commentez</label>
          <input type="text" class="form-control" id="contenu"  name="contenu"  value="{{ $commentaire->contenu}}">
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">date</label>
          <input type="date" class="form-control" id="date"  name="date"  value="{{ $commentaire->date}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

     
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>