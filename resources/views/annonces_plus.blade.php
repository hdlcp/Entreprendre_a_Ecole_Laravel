<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNONCES+</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_100.CSS') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header class="d-flex align-items-center text-white py-2">
        <!-- Logo de gauche -->
        <div class="logo-container1 d-flex align-items-center justify-content-center bg-white me-3"
            style="height: 73px; width: 73px;">
            <img src="{{ asset('images/0 2.png') }}" alt="Logo gauche" class="img-fluid">
        </div>
      
        <!-- Texte principal -->
        <div class="text-container flex-grow-1">
            <h1 class="m-0 fw-bold">INSTI</h1>
            <p class="m-0">Institut Nationale Supérieur de Technologie Industrielle <br /> de Lokossa</p>
        </div>
      
        <!-- Liens à droite -->
        <div class="links d-flex align-items-center">
          <a href="#" class="text-white d-flex align-items-center me-3">
              <img src="{{ asset('icons/info-circle-fill.svg') }}" alt="Info" class="icon-white me-1" style="width: 20px; height: 20px;"
                  class="me-1"> Accès rapide
          </a>
          <span class="text-white">|</span>
          <a href="#" class="text-white d-flex align-items-center mx-3">
              <img src="{{ asset('icons/snow3.svg') }}" alt="Observatoire" class="icon-white me-1" style="width: 20px; height: 20px;"
                  class="me-1"> Observatoire
          </a>
          <span class="text-white">|</span>
          <a href="#" class="text-white d-flex align-items-center ms-3">
              <img src="{{ asset('icons/person-fill.svg') }}" alt="Person" class="icon-white me-1" style="width: 20px; height: 20px;"
                  class="me-1"> Nous écrire
          </a>
      </div>
      
        <!-- Logo de droite -->
        <div class="logo-container1 d-flex align-items-center justify-content-center bg-white ms-3"
            style="height: 73px; width: 73px;">
            <img src="{{ asset('images/logoINSTI 1.png') }}" alt="Logo droite" class="img-fluid">
        </div>
      </header>
      <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <!-- Bouton de menu (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <!-- Menu principal -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">ACCEUIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('annonces') }}">ANNONCES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('entreprises') }}">ENTREPRISES CRÉÉES</a>
            </li>
            <!-- Logo central -->
            <li class="nav-item logo-container">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/h pe.png') }}" alt="Logo entreprise" class="img-fluid logo">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('galeries') }}">GALERIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}#partenaires">PARTENAIRES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts') }}">CONTACTS</a>
            </li>
        </ul>
      </div>
      
        </div>
      </nav>
<!-- Bannière -->
<section class="gallery-header position-relative">
    <!-- Texte fixe sur le carrousel -->
    <!-- Texte fixe sur le carrousel -->
    <div class="carousel-overlay">
        <div class="carousel_title">
            <h1>ANNONCES</h1>
            <p class="subtitle">NOUVELLES ET ÉVÉNEMENTS</p>
            <p class="event">Lancement d'AppDev229</p>
        </div>
    </div>
    <div class="header-image">
        <img src="{{ asset('images/DSC_0196 1.png') }}" class="d-block w-100" alt="Galeries">
    </div>
</section>

<div class="container00">
    <div class="main-content">
        <img src="{{ asset('images/img_actu.png') }}" alt="Lancement AppDev229" class="event-image">
        <div class="content">
            <p class="event-date title" style="font-size: 17px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   17 Mars 2022</p>
            <h1 class="title" style="font-size: 1.4rem;">Lancement d'AppDev229</h1>
            <p>Le programme Entreprendre à l'École de l'INSTI célèbre le lancement officiel d’AppDev229, une startup
                fondée par des étudiants ambitieux et encadrée par des mentors expérimentés. Créée le 4 juin 2018, cette
                entreprise met l’accent sur le développement d’applications répondant aux besoins spécifiques des
                entreprises locales.</p>

            <p>Sous la direction de M. Abel M. Konon et M. Céphas Hounzandji, cette initiative vise à doter les
                étudiants d’un savoir-faire pratique et à stimuler leur créativité entrepreneuriale. Parmi les projets
                phares d’AppDev229 figure une application de gestion d’offres, conçue pour optimiser les opérations des
                entreprises.</p>

            Citation: <br>
            <p>Lionel Agossadou, membre de l'équipe fondatrice, déclare : <br>
                “AppDev229 n’est pas seulement une startup, c’est un rêve collectif devenu réalité grâce au soutien
                du programme et de nos mentors.” </p>


            <p>Avec ce lancement, AppDev229 promet de devenir un acteur clé de la transformation numérique au Bénin.</p>

        </div>
    </div>

    <div class="sidebar">
        <div class="search-box">

            <input type="search" placeholder="Rechercher une actualité par mots-clés">
            <i class="fas fa-search"></i> <!-- Icône de recherche -->
        </div>


        <!-- Catégories -->
        <div class="cate_tag">
            <div class="categories mb-4">
                <h5>Catégories</h5>
                <div class="under mt-2"></div>
                <ul>
                    <li><a href="#" class="category-link">Articles</a></li>
                    <li><a href="#" class="category-link">Événements</a></li>
                    <li><a href="#" class="category-link">Communiqués</a></li>
                    <li><a href="#" class="category-link">Témoignages</a></li>
                </ul>
            </div>

            <!-- Tags -->
            <div class="tags">
                <h5>Tags</h5>
                <div class="under mt-2"></div>
                <div class="d-flex flex-wrap">
                    <button class="btn">Startups</button>
                    <button class="btn">Formation</button>
                    <button class="btn">Partenariats</button>
                    <button class="btn">Innovation</button>
                    <button class="btn">Développement</button>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="return">
    <a href="{{ route('annonces') }}" class="back-button">← Retour</a>
</div>
<!-- JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<footer class="py-4">
    <div class="container">
      <div class="row">
        <!-- Logo et Informations -->
        <div class="col-md-4">
          <img src="{{ asset('icons/logoINSTI 1.png') }}" alt="Logo" class="mb-3" style="width: 80px;"> 
          <p class="mb-0">Lokossa, Agnivedji</p>
          <p><strong>(+229) 22 41 13 66</strong></p>
          <p>"Science et technologie au service de l'homme"</p>
          <a href="mailto:instilokossa@gmail.com" class="text-white"><strong>instilokossa@gmail.com</strong></a>
          <div class="mt-3">
            <!-- Icône Facebook -->
            <a href="https://facebook.com" target="_blank" class="text-white me-3">
              <img src="{{ asset('icons/facebook.svg') }}" alt="Facebook" class="icon-white me-1" style="width: 40px; height: 40px;">
            </a>
            <!-- Icône YouTube -->
            <a href="https://youtube.com" target="_blank" class="text-white me-3">
              <img src="{{ asset('icons/youtube.svg') }}" alt="YouTube" class="icon-white me-1" style="width: 40px; height: 40px;">
            </a>
          </div>
          <div class="underline mt-2"></div>
        </div>
  
        <!-- Nos Ressources -->
        <div class="col-md-4">
          <h5>NOS RESSOURCES</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Incubateur de startups</a></li>
            <li><a href="#" class="text-white text-decoration-none">Unité d'application de l'INSTI</a></li>
            <li><a href="#" class="text-white text-decoration-none">Plateforme E-learning</a></li>
            <li><a href="#" class="text-white text-decoration-none">Blog officiel de l'INSTI</a></li>
          </ul>
        </div>
  
        <!-- Liens Utiles -->
        <div class="col-md-4">
          <h5>LIENS UTILES</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Ministère de l'Enseignement Supérieur et de la Recherche Scientifique</a></li>
            <li><a href="#" class="text-white text-decoration-none">Université Nationale des Sciences, Technologies, Ingénierie et Mathématiques</a></li>
            <li><a href="#" class="text-white text-decoration-none">Institut National Supérieur de Technologie Industrielle</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4">
        <p class="mb-0">© INSTI, UNSTIM 2024 - Réalisé par le groupe (OLOUKPEDE, BOSSA, TANGNI, GBECHI, ADE)</p>
      </div>
    </div>
  </footer>

</html>