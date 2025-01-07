<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces</title>
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
            <h1>ANNONCES</h1>
            <p class="subtitle">NOUVELLES ET ÉVÉNEMENTS</p>
        </div>
    </div>
    <div class="header-image">
        <img src="{{ asset('images/DSC_0196 1.png') }}" class="d-block w-100" alt="Galeries">
    </div>
</section>

<div class="container00">
    <div class="main-content">
      <img src="{{ asset('images/image_duosale2.jpeg') }}" alt="Lancement AppDev229" class="event-image">
      <div class="content" style="margin-bottom: 55px;">
          <p class="event-date title" style="font-size: 17px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   22 juillet 2024</p>
          <h1 class="title" style="font-size: 1.4rem;">Lancement de l'entreprise DUOS SALES</h1>
          <p>DUOS SALES est une organisation visionnaire créée pour initier les jeunes écoliers et élèves aux bases de l'électronique, ouvrant ainsi la voie à une meilleure compréhension des technologies modernes.</p>
              <button class="read-more"><a href="{{ route('annonces_plus') }}" class="lien"><strong>Lire plus </strong></a><img src="{{ asset('icons/weui_eyes-on-filled.png') }}" alt="lire+"></button>
      </div>
        <img src="{{ asset('images/DSC_0196 1.png') }}" alt="Lancement AppDev229" class="event-image">
        <div class="content" style="margin-bottom: 55px;">
            <p class="event-date title" style="font-size: 17px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   17 Mars 2022</p>
            <h1 class="title" style="font-size: 1.4rem;">Renforcement du partenariat entre l’INSTI et le GEL SUD</h1>
            <p>L’INSTI et le GEL SUD ont signé un nouvel accord pour renforcer leur collaboration. Ce partenariat stratégique vise
            à offrir davantage de ressources et de formations pour soutenir les jeunes entrepreneurs.</p>
                <button class="read-more"><a href="{{ route('annonces_plus') }}" class="lien" ><strong>Lire plus </strong></a><img src="{{ asset('icons/weui_eyes-on-filled.png') }}" alt="lire+"></button>
        </div>
        <img src="{{ asset('images/DSC_0196 1.png') }}" alt="Lancement AppDev229" class="event-image">
        <div class="content">
            <p class="event-date title" style="font-size: 17px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">   17 Mars 2022</p>
            <h1 class="title" style="font-size: 1.4rem;">Atelier intensif de développement mobile pour les startups incubées</h1>
            <p>Un atelier intensif de développement mobile a été organisé pour les startups incubées à l’INSTI. Cette formation vise à 
                doter les étudiants de compétences avancées en programmation pour 
                concrétiser leurs projets.</p>
                <button class="read-more"><a href="{{ route('annonces_plus') }}" class="lien"><strong>Lire plus </strong></a> <img src="{{ asset('icons/weui_eyes-on-filled.png') }}" alt="lire+"></button>
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
<div class="pagination">
    <button class="page-btn active">1</button>
    <button class="page-btn">2</button>
    <button class="page-btn">3</button>
    <button class="next-btn">→</button>
</div>
<!-- JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Sélectionne tous les liens de navigation
    const navLinks = document.querySelectorAll('.nav-link');
  
    // Applique la classe active en fonction de l'URL actuelle
    navLinks.forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
  
      // Gère le clic pour ajouter la classe active
      link.addEventListener('click', () => {
        navLinks.forEach(l => l.classList.remove('active')); // Supprime les classes actives
        link.classList.add('active'); // Applique la classe active au lien cliqué
      });
    });
  </script>
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