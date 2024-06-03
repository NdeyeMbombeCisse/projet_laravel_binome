<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Ajouter un bien immobilier</h1>
    <div class="container">
    <div class="row justify-content-center">
    <form method="POST" action="sauvegarder_article">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du bien *</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="url_img" class="form-label">URL de l'image *</label>
            <input type="url" class="form-control" id="url_img" name="url_img" required>
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description *</label>
            <textarea class="form-control" id="desc" name="desc" required></textarea>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date d'enregistrement *</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="localisation" class="form-label">Localisation *</label>
            <input type="text" class="form-control" id="localisation" name="localisation" required>
        </div>
        <div class="mb-3">
            <label for="cathegorie" class="form-label">Catégorie *</label>
            <select id="cathegorie" name="cathegorie" class="form-select" required>
                <option value="luxe">Luxe</option>
                <option value="moyen">Moyen</option>
                <option value="bas">Bas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="statut" class="form-label">Statut *</label>
            <select id="statut" name="statut" class="form-select" required>
                <option value="0">Occupé</option>
                <option value="1">Libre</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>