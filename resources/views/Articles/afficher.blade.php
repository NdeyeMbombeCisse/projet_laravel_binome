<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .banner-image {
        background-image: url('https://i.pinimg.com/564x/fc/30/ab/fc30abff75de4f30a66bcfbe8245cf46.jpg'); /* Remplacez par l'URL de votre image */
        background-size: cover;
        background-position: center;
        height: 800px;
        position: relative;
      }
      .banner-content {
        position: absolute;
        text-align: center;
        left: 0;
        margin-top:200px; 
        width: 100%;
        color: white;
        padding: 20px;
        color: rgb(239, 237, 233);
        font-size: 30px;
        font-weight: 700;
        
      }
      .banner-content h1{
        font-weight: 700;

      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      footer {
      background-color: #000;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header>
     
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              {{-- <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
              <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
              <circle cx="12" cy="13" r="4"/>
            </svg>
            <strong>Mbombe & Babou'Agent immobilier</strong>
          </a>
          <div> 
            @auth
            <a href="#" class="btn btn-danger m-3" onclick="document.getElementById('logout-form').submit()"><form action="logout" method="POST" id="logout-form">@csrf</form>Se deconnecter</a>
            <a href="ajouter_article" class="btn btn-primary">Ajouter</a>
            @endauth 
            @guest
            <a href="login" class="btn btn-primary">Se connecter</a>
            @endguest
        </div>
        </div>
      </div>
      <div class="banner-image">
        <div class="banner-content">
          <h1 class="text-center fs-1">Mbombe & Babou'Agent immobilier</h1>
          <p class="text-center">Votre meilleur choix pour trouver votre maison de rêve.</p>
        </div>
      </div>
    </header>
    @guest
  <div class="container mt-5">
   
    <h1 class="text-center">A propos de nous</h1>
   
    <div class="card mb-3" style="max-width: 2000px;">
      <div class="row g-0 ">
        <div class="col-md-4 ">
          <img src="https://i.pinimg.com/564x/bd/d9/6b/bdd96bf37d70ce5b79f9c7da7a2d19ce.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        
          
        
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
               eius autem! Eveniet dolorum laborum laudantium ex, cum maiores, 
               corporis quis sequi cumque quasi debitis, error facere eius consequuntur 
               maxime blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
               eius autem! Eveniet dolorum laborum laudantium ex, cum maiores, 
               corporis quis sequi cumque quasi debitis, error facere eius consequuntur 
               maxime blanditiisLorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
               eius autem! Eveniet dolorum laborum laudantium ex, cum maiores, 
               corporis quis sequi cumque quasi debitis, error facere eius consequuntur 
               maxime blanditiisLorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
               eius autem! Eveniet dolorum laborum laudantium ex, cum maiores, 
               corporis quis sequi cumque quasi debitis, error facere eius consequuntur 
               maxime blanditiisLorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
               eius autem! Eveniet dolorum laborum laudantium ex, cum maiores, 
               corporis quis sequi cumque quasi debitis, error facere eius consequuntur
               
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endguest
    <h1 class="text-center mb-5">Liste  des biens immobilier</h1>
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-3">
            <div class="card mb-3" style="width: 25rem;">
                <img src="{{ $article->url_img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->nom}}</h5>
                    <p class="card-text">{{ Str::limit ($article->desc,30)}}</p>
                    {{-- <p class="card-text">cathegorie: {{ $article->cathegorie}}</p> --}}
                    {{-- <p class="card-text"> Statut:{{ $article->statut}}</p> --}}
                    <p class="card-text">Localisation:{{ $article->localisation}}</p>
                    <p class="card-text">Date publication:{{ $article->date}}</p>
                    <div class="d-flex">
                      <a href="detail/{{ $article->id}}" class="btn btn-primary m-2">voir detail</a>
                      @auth
                      <a href="{{ url('supprimer/' . $article->id) }}" class="btn btn-danger m-2">Supprimer</a>
                      <a href="{{ url('modifier/' . $article->id) }}" class="btn btn-primary m-2">Modifier</a>
                      @endauth
                    </div>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
   
    <footer class="mt-5">
      <div class="container">
        <div> 
          <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="" width="30">  
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeHq-vaUK8MlOy8sPlCE5cHlSF9w7jUJ6YDQ&s" alt="" width="30">
          <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple122/v4/91/ef/67/91ef67ae-4877-1286-a4d6-fb04f6f37e9e/ProductionAppIcon-2x-4-0-0-85-220.png/1200x630bb.png" alt="" width="30">  
  

       </div>
        <p>&copy; 2024 Votre société. Tous droits réservés.</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>