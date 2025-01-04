<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EntrepriseCree</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_100.CSS') }}" rel="stylesheet">
    <link href="{{ asset('css/style0.css') }}" rel="stylesheet">
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
                <p class="subtitle">LES ENTREPRISES INNOVANTES NÉES GRACE AU PROGRAMME ENTREPRENDRE A L’ÉCOLE</p>
                <p class="event">EduTech Solutions</p>
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
                <p class="event-date title" style="font-size: 17px; color:#0D4293;"><img src="icons/Vector (1).png" alt="galerie">    Créée le 20 mars 2020</p>
                <h1 class="title" style="font-size: 1.4rem;margin-top: 30px;">EduTech Solutions</h1>
                <h2 class="title" style="font-size: 1rem; margin-top: 30px;margin-bottom: 30px;">Domaine d’Activité :
                    Éducation numérique.</h2>
                <h2 class="title" style="font-size: 1rem; color:#0D4293;margin-bottom: 10px">Description Détaillée :
                </h2>
                <p>EduTech Solutions est une startup innovante qui se
                    consacre à la transformation numérique du secteur éducatif. L’entreprise
                    conçoit des plateformes interactives et des outils numériques pour améliorer l'accès à
                    l'éducation et rendre l'apprentissage plus dynamique et engageant.</p>

                <h2 class="title" style="font-size: 1rem; color:#0D4293;margin-top: 30px;">Mission :</h2>

                <p>Favoriser l'éducation pour tous grâce
                    à des solutions technologiques innovantes, adaptées aux
                    besoins des élèves, enseignants, et institutions.</p>

                <h2 class="title" style="font-size: 1rem; color:#0D4293;margin-top: 30px;">Vision :</h2>

                <p>Devenir un acteur clé de l’éducation numérique en Afrique,
                    en mettant l’accent sur l’innovation,
                    l’accessibilité et l’impact social.</p>
                <h2 class="title" style="font-size: 1rem; color:#0D4293;margin-top: 30px;">Fondateur :</h2>
                <ul class="founders-list">
                    <li>Claire HOUNZANDJI : Ingénieure pédagogique et passionnée d’innovation éducative.</li><br>

                    <li>Yannick AGOSSADOU : Développeur logiciel spécialisé en applications éducatives.</li>
                </ul>

                <h2 class="title" style="font-size: 1rem; color:#0D4293;margin-top: 30px;">Projets Réalisés ou Produits
                    :</h2>

                <p>EduTech Solutions a développé plusieurs produits pour répondre aux défis actuels de l'éducation :</p>
                <ol class="founders-list">
                    <li>SmartClass : Une plateforme de gestion de classes en ligne permettant aux enseignants de
                        planifier, évaluer et interagir avec leurs élèves de manière fluide.</li><br>
                    <li>QuizMaster : Une application mobile pour organiser des quiz interactifs, idéale pour les
                        révisions et évaluations.</li><br>
                    <li>EduHub : Une bibliothèque numérique rassemblant des ressources pédagogiques accessibles en ligne
                        ou hors ligne.</li>
                </ol>

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
                    </ul>
                </div>

                <!-- Tags -->
                <div class="tags" style="margin-bottom: 610px;;">
                    <h2 style="font-size: 1.1rem;margin-top: 30px;">Tags</h2>
                    <div class="under mt-2"></div>
                    <div class="d-flex flex-wrap">
                        <button class="btn">Startups</button>
                        <button class="btn">Innovation</button>
                        <button class="btn">Développement durable</button>
                    </div>
                </div>

                <div class="Contacts mb-4">
                    <h5>Contacts</h5>
                    <div class="under mt-2"></div>
                    <h2 class="title" style="font-size: 1rem; color:#0D4293;">E-mail :</h2>
                    <p>contact@edutechsolutions.com</p><br>
                    <h2 class="title" style="font-size: 1rem; color:#0D4293;">Téléphone :</h2>
                    <p>+229 97 65 43 21</p><br>
                    <h2 class="title" style="font-size: 1rem; color:#0D4293;">Site Web :</h2>
                    <p>www.edutechsolutions.com</p><br>
                </div>
            </div>
        </div>

    </div>
    <div class="partners-section">
        <h1><strong>Partenaires Associés</strong></h1>
        <div class="under1"></div>
        <div class="carousel1">
            <button class="prev-btn">❮</button>
            <div class="carousel-images">
                <img src="icons/images-removebg-preview (3).png" alt="UNSTIM">
                <img src="icons/image-removebg-preview.png" alt="SONEB">
                <img src="icons/p8.png" alt="Guichet d'Économie Locale">
            </div>
            <button class="next-btn">❯</button>
        </div>
    </div>
        <div class="buttons">
            <a href="gallery.html" class="btn-gallery">Voir Galerie d'Images <span><img src="icons/solar_gallery-wide-bold-duotone.png" alt="galerie"></span></a>
        </div>
    
    <script>
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const carouselImages = document.querySelector('.carousel-images');
    
        let scrollPosition = 0;
    
        prevBtn.addEventListener('click', () => {
            scrollPosition -= 120; // Ajustez la valeur selon la largeur de vos images
            if (scrollPosition < 0) scrollPosition = 0;
            carouselImages.style.transform = `translateX(-${scrollPosition}px)`;
        });
    
        nextBtn.addEventListener('click', () => {
            scrollPosition += 120; // Ajustez la valeur selon la largeur de vos images
            const maxScroll = carouselImages.scrollWidth - carouselImages.offsetWidth;
            if (scrollPosition > maxScroll) scrollPosition = maxScroll;
            carouselImages.style.transform = `translateX(-${scrollPosition}px)`;
        });
    </script>
    
    <div class="return">
        <a href="{{ route('entreprises') }}" class="back-button">← Retour</a>
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