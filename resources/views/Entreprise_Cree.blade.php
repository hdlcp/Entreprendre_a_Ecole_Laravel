<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise Créer</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_100.CSS') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
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
            <h1>ENTREPRISES CRÉÉES</h1>
            <p class="subtitle">DÉCOUVREZ LES ENTREPRISES INNOVANTES NÉES GRACE AU PROGRAMME ENTREPRENDRE À L’ÉCOLE</p>
        </div>
    </div>
    <div class="header-image">
        <img src="{{ asset('images/DSC_0196 1.png') }}" class="d-block w-100" alt="Galeries">
    </div>
</section>

<div class="container00">
    <div class="main-content">
        <img src="{{ asset('images/img_actu.png') }}" alt="Lancement AppDev229" class="event-image">
        <div class="content" style="margin-bottom: 55px;">
            <p class="event-date title" style="font-size: 17px;margin-bottom: 30px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   4 juin 2018</p>
            <h1 class="title" style="font-size: 1.4rem;"><strong>AppDev229</strong></h1>
            <p style="color:#0D4293;"><strong>Domaine d’Activité :</strong> Développement d’applications logicielles.</p>
            <p>AppDev229, une startup prometteuse créée dans le cadre du programme Entreprendre à l'École, 
                se spécialise dans le développement d’applications pratiques pour les entreprises locales. 
                Son lancement marque un pas vers l’innovation et la transformation numérique au Bénin.</p>
                <button class="read-more"><a href="{{ route('entreprises_lirePlus') }}" class="lien"><strong>Lire plus </strong></a><img src="{{ asset('icons/weui_eyes-on-filled.png') }}" alt="lire+"></button>
        </div>
        <img src="{{ asset('images/img_actu.png') }}" alt="Lancement AppDev229" class="event-image">
        <div class="content" style="margin-bottom: 55px;">
            <p class="event-date title" style="font-size: 17px;margin-bottom: 30px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   10 septembre 2019</p>
            <h1 class="title" style="font-size: 1.4rem;"><strong>AgroGreen</strong></h1>
            <p style="color:#0D4293;"><strong>Domaine d’Activité :</strong> Agriculture durable.</p>
            <p>AgroGreen propose des solutions innovantes pour une agriculture respectueuse
                 de l’environnement, avec un focus sur les cultures 
                 locales et la gestion durable des ressources.</p>
                <button class="read-more"><a href="{{ route('entreprises_lirePlus') }}" class="lien"><strong>Lire plus </strong></a><img src="{{ asset('icons/weui_eyes-on-filled.png') }}" alt="lire+"></button>
        </div>
        <img src="{{ asset('images/img_actu.png') }}" alt="Lancement AppDev229" class="event-image">
        <div class="content">
            <p class="event-date title" style="font-size: 17px;margin-bottom: 30px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   20 mars 2020</p>
            <h1 class="title" style="font-size: 1.4rem;"><strong>EduTech Solutions</strong></h1>
            <p style="color:#0D4293;"><strong>Domaine d’Activité :</strong> Éducation numérique.</p>
            <p>EduTech Solutions développe des plateformes éducatives interactives pour améliorer l’accès à la formation et à l’apprentissage numérique dans les écoles et universités.</p>
                <button class="read-more"><a href="{{ route('entreprises_lirePlus') }}" class="lien"><strong>Lire plus </strong></a><img src="{{ asset('icons/weui_eyes-on-filled.png') }}" alt="lire+"></button>
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
                    <h2 style="font-size: 1.1rem;margin-top: 30px;">Domaine d’Activité</h2>
                    <div class="under mt-2"></div>
                    <ul>
                        <li><a href="#" class="category-link">Technologie</a></li>
                        <li><a href="#" class="category-link">Agriculture</a></li>
                        <li><a href="#" class="category-link">Éducation</a></li>
                        <li><a href="#" class="category-link">Transport</a></li>
                    </ul>
                </div>
            </div>
    </div>

</div>
<div class="pagination">
    <button class="page-btn active">1</button>
    <button class="page-btn">2</button>
    <button class="page-btn">3</button>
    <button class="next-btn">→</button>
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