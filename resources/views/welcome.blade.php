<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTI</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/style_index.css" rel="stylesheet">
    <link href="resources/css/styles_index.css" rel="stylesheet">
</head>

<header class="d-flex align-items-center text-white py-2">
  <!-- Logo de gauche -->
  <div class="logo-container1 d-flex align-items-center justify-content-center bg-white me-3"
      style="height: 73px; width: 73px;">
      <img src="public/images/0 2.png" alt="Logo gauche" class="img-fluid">
  </div>

  <!-- Texte principal -->
  <div class="text-container flex-grow-1">
      <h1 class="m-0 fw-bold">INSTI</h1>
      <p class="m-0">Institut Nationale Supérieur de Technologie Industrielle <br /> de Lokossa</p>
  </div>

  <!-- Liens à droite -->
  <div class="links d-flex align-items-center">
      <a href="#" class="text-white d-flex align-items-center me-3">
          <i class="bi bi-info-circle me-1" style="font-size: 20px;"></i> Accès rapide
      </a>
      <span class="text-white">|</span>
      <a href="#" class="text-white d-flex align-items-center mx-3">
          <i class="bi bi-snow3" style="font-size: 20px;"></i> Observatoire
      </a>
      <span class="text-white">|</span>
      <a href="#" class="text-white d-flex align-items-center ms-3">
          <i class="bi bi-person-fill" style="font-size: 20px;"></i> Nous écrire
      </a>
  </div>

  <!-- Logo de droite -->
  <div class="logo-container1 d-flex align-items-center justify-content-center bg-white ms-3"
      style="height: 73px; width: 73px;">
      <img src="public/images/logoINSTI 1.png" alt="Logo droite" class="img-fluid">
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
              <li class="nav-item"><a class="nav-link" href="welcome.blade.php">ACCEUIL</a></li>
              <li class="nav-item"><a class="nav-link" href="annonces_valide.blade.php">ANNONCES</a></li>
              <li class="nav-item"><a class="nav-link" href="entreprisecree_LirePlus.blade.php">ENTREPRISES CRÉÉES</a></li>
              <!-- Logo central -->
              <li class="nav-item logo-container">
                  <a href="#">
                      <img src="public/images/h pe.png" alt="Logo entreprise" class="img-fluid logo">
                  </a>
              </li>
              </li>
              <li class="nav-item"><a class="nav-link" href="album.blade.php">GALERIES</a></li>
              <li class="nav-item"><a class="nav-link" href="index.blade.php">PARTENAIRES</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.blade.php">CONTACTS</a></li>
          </ul>
      </div>
  </div>
</nav>

 <!-- Bannière Carrousel -->
<section class="banner-carousel">
  <div class="carousel">
    <!-- Slide 1 -->
    <div class="carousel-slide active">
      <img src="public/images/banner1.jpeg" alt="Banner 1">
      <div class="banner-content">
        <h1>Découvrez comment l'INSTI prépare la nouvelle génération d’entrepreneurs 
          grâce à une formation pratique, axée sur les compétences et l'innovation.</h1>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="carousel-slide">
      <img src="public/images/banner2.jpeg" alt="Banner 2">
      <div class="banner-content">
        <h1>Une éducation axée sur l'innovation.</h1>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="carousel-slide">
      <img src="public/images/banner3.jpeg" alt="Banner 3">
      <div class="banner-content">
        <h1>Rejoignez-nous pour transformer des idées en réalité.</h1>
      </div>
    </div>
    <!-- Contrôles -->
    <button class="carousel-control prev">&#10094;</button>
    <button class="carousel-control next">&#10095;</button>
  </div>
</section>

<script src="script_index.js" defer></script>
   
  

<!-- Section Présentation -->
<section class="presentation-section">
  <div class="presentation-container">
    <!-- Image de l'étudiante -->
    <div class="presentation-image">
      <img src="images/etudiante.png" alt="Étudiante" />
    </div>
    <!-- Texte de présentation -->
    <div class="presentation-content">
      <h2 class="presentation-title">Présentation du Programme</h2>
      <p>
        L'Institut National Supérieur de Technologie Industrielle (INSTI) de Lokossa, en partenariat avec 
        des organisations de développement, propose le Programme Entreprendre à l’École. Ce programme vise 
        à former des étudiants aux compétences entrepreneuriales et technologiques pour les préparer à l'auto-emploi. 
        Grâce à une formation de qualité et un accompagnement professionnel, l'INSTI aide les jeunes à transformer leurs 
        idées en entreprises innovantes, contribuant ainsi au développement économique local.
      </p>
      <div class="presentation-buttons">
        <a href="#" class="btn-primary">
          Lire plus
          <img src="images/arrow-icon.svg" alt="Flèche" class="btn-icon">
        </a>
        <a href="#" class="btn-primary">
          Voir l'INSTI
          <img src="images/globe-icon.svg" alt="Globe" class="btn-icon">
        </a>
      </div>
    </div>
  </div>
</section>

  
  <!-- Section Statistiques -->
  <section class="stats-section">
    <div class="stats-content">
        <!-- Bloc gauche : Image + texte -->
        <div class="stats-left">
            <img src="images/team-meeting.png" alt="Équipe en réunion" class="stats-image">
            <h2 class="stats-title">NOS STATISTIQUE</h2>
            <p class="stats-description">
                Grâce à l’appui de nos partenaires, le Programme Entreprendre à l’École a permis de former 
                [nombre d’étudiants] jeunes aux compétences entrepreneuriales. Aujourd’hui, plusieurs startups 
                issues du programme innovent pour répondre aux besoins locaux, et un grand nombre de participants 
                envisagent de créer leur propre entreprise.
            </p>
        </div>

        <!-- Bloc droit : Statistiques -->
        <div class="stats-right">
            <!-- Première colonne -->
            <div class="stats-column">
                <div class="stat-item">
                    <img src="public/images/startups.svg" alt="Startups créées" class="stat-icon">
                    <div class="stat-info">
                        <h3 class="stat-number">4</h3>
                        <p class="stat-text">NOMBRE DE<br>STARTUPS<br>CRÉÉES</p>
                    </div>
                </div>
                <div class="stat-item">
                    <img src="public/images/students.svg" alt="Étudiants formés" class="stat-icon">
                    <div class="stat-info">
                        <h3 class="stat-number">20</h3>
                        <p class="stat-text">ÉTUDIANTS<br>FORMÉS</p>
                    </div>
                </div>
                <div class="stat-item">
                    <img src="public/images/projects.svg" alt="Projets développés" class="stat-icon">
                    <div class="stat-info">
                        <h3 class="stat-number">35+</h3>
                        <p class="stat-text">PROJETS<br>DÉVELOPPÉS</p>
                    </div>
                </div>
            </div>

            <!-- Deuxième colonne -->
            <div class="stats-column">
                <div class="stat-item">
                    <img src="public/images/employment.svg" alt="Taux d’emploi" class="stat-icon">
                    <div class="stat-info">
                        <h3 class="stat-number">80%</h3>
                        <p class="stat-text">TAUX D’EMPLOI ET<br>D’AUTO-EMPLOI</p>
                    </div>
                </div>
                <div class="stat-item">
                    <img src="public/images/partners.svg" alt="Partenariats" class="stat-icon">
                    <div class="stat-info">
                        <h3 class="stat-number">10</h3>
                        <p class="stat-text">PARTENARIATS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
<!-- Section news -->    
<section class="news-section">
  <div class="container">
      <h2 class="section-title">DERNIÈRES NOUVELLES ET ÉVÉNEMENTS</h2>
      <p class="section-subtitle">Restez à jour avec les avancées et événements marquants du programme Entreprendre à l'École</p>
      
      <div class="news-cards">
          <!-- Premier bloc (50%) -->
          <div class="news-card large">
              <img src="public/images/news1.png" alt="Lancement d'AppDev229" class="news-image">
              <div class="news-overlay">
                  <div class="news-content">
                      <h3 class="news-title">Lancement d’AppDev229</h3>
                      <p class="news-description">Une startup spécialisée en développement d’applications.</p>
                      <div class="news-footer">
                          <span class="news-date">
                              <img src="public/images/calendar-icon1.svg" alt="Calendar icon" class="news-icon-calendar">
                              <strong>17 Mars 2022</strong>
                          </span>
                          <a href="annonces_plus.blade.php" class="news-button">
                              Lire plus
                              <img src="public/public/images/eye-icon.svg" alt="Eye icon" class="news-icon-eye">
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Deuxième bloc (25%) -->
          <div class="news-card small">
              <img src="public/images/news2.png" alt="Événement 2" class="news-image">
              <div class="news-content">
                  <h3 class="news-title">Lancement d’AppDev229</h3>
                  <p class="news-description">Une startup spécialisée en développement d’applications.</p>
                  <div class="news-footter">
                      <span class="news-date">
                          <img src="public/images/calendar-icon.svg" alt="Calendar icon" class="news-icon-calendar">
                          <strong>17 Mars 2022</strong>
                      </span>
                      <a href="annonces_plus.blade.php" class="news-button">
                          Lire plus
                          <img src="public/images/eye-icon.svg" alt="Eye icon" class="news-icon-eye">
                      </a>
                  </div>
              </div>
          </div>

          <!-- Troisième bloc (25%) -->
          <div class="news-card small">
              <img src="public/images/news3.png" alt="Événement 3" class="news-image">
              <div class="news-content">
                  <h3 class="news-title">Lancement d’AppDev229</h3>
                  <p class="news-description">Une startup spécialisée en développement d’applications.</p>
                  <div class="news-footer">
                      <span class="news-date">
                          <img src="public/images/calendar-icon.svg" alt="Calendar icon" class="news-icon-calendar">
                          <strong>17 Mars 2022</strong>
                      </span>
                      <a href="annonces_plus.blade.php" class="news-button">
                          Lire plus
                          <img src="public/images/eye-icon.svg" alt="Eye icon" class="news-icon-eye">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


    <!-- Partenaires -->

    <div class="partners-section">
      <h1><strong>Partenaires Associés</strong></h1>
      <div class="under1"></div>
      <div class="carousel1">
          <button class="prev-btn">❮</button>
          <div class="carousel-images">
            <img src="public/images/UNSTIM.png" alt="UNSTIM">
            <img src="public/images/SONEB.png" alt="SONEB">
            <img src="public/images/GEL.png" alt="Guichet d'Économie Locale">
          </div>
          <button class="next-btn">❯</button>
      </div>
  </div>
  


  <footer class="py-4">
    <div class="container">
      <div class="row">
        <!-- Logo et Informations -->
        <div class="col-md-4">
          <img src="public/icons/logoINSTI 1.png" alt="Logo" class="mb-3" style="width: 80px;"> 
          <p class="mb-0">Lokossa, Agnivedji</p>
          <p><strong>(+229) 22 41 13 66</strong></p>
          <p>"Science et technologie au service de l'homme"</p>
          <a href="mailto:instilokossa@gmail.com" class="text-white"><strong>instilokossa@gmail.com</strong></a>
          <div class="mt-3">
            <!-- Icône Facebook -->
            <a href="https://facebook.com" target="_blank" class="text-white me-3">
              <img src="public/icons/facebook.svg" alt="Facebook" class="icon-white me-1" style="width: 40px; height: 40px;">
            </a>
            <!-- Icône YouTube -->
            <a href="https://youtube.com" target="_blank" class="text-white me-3">
              <img src="public/icons/youtube.svg" alt="YouTube" class="icon-white me-1" style="width: 40px; height: 40px;">
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