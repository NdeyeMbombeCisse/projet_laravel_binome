
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center">Inscription</h1>
    <form class="container" action="register" method="POST">
      @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Prenom et Nom</label>
    <input type="text" class="form-control" id="name" name="name" >
    @error('name')
    <div class="alert alert-danger" role="alert">{{ $message}}</div>
   @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email </label>
    <input type="email" class="form-control" id="email" name="email" >
    @error('email')
    <div class="alert alert-danger" role="alert">{{ $message }}</div>
   @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password">
    @error('password')
   <div class="alert alert-danger" role="alert">{{ ($message) }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Confirmation Mot de Passe</label>
    <input type="password" class="form-control" id="password" name="password" >
  @error('password')
   <div class="alert alert-danger" role="alert">{{ ($message) }}</div>
  @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>

