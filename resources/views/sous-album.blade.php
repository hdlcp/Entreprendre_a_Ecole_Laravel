<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTI</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style_000.css" rel="stylesheet">
</head>
<header class="d-flex align-items-center text-white py-2">
    <!-- Logo de gauche -->
    <div class="logo-container1 d-flex align-items-center justify-content-center bg-white me-3"
        style="height: 73px; width: 73px;">
        <img src="images/0 2.png" alt="Logo gauche" class="img-fluid">
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
        <img src="images/logoINSTI 1.png" alt="Logo droite" class="img-fluid">
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
                <li class="nav-item"><a class="nav-link" href="index.html">ACCEUIL</a></li>
                <li class="nav-item"><a class="nav-link" href="annonces_valide.html">ANNONCES</a></li>
                <li class="nav-item"><a class="nav-link" href="Entreprise_Cree.html">ENTREPRISES CRÉÉES</a></li>
                <!-- Logo central -->
                <li class="nav-item logo-container">
                    <a href="#">
                        <img src="images/h pe.png" alt="Logo entreprise" class="img-fluid logo">
                    </a>
                </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="album.html">GALERIES</a></li>
                <li class="nav-item"><a class="nav-link" href="index.html">PARTENAIRES</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">CONTACTS</a></li>
            </ul>
        </div>
    </div>
</nav>
  <div class="container my-5">
    <div class="albums-header">
        <h2 class="album-title">LES SOUS - ALBUMS</h2>
        <div class="divider flex-grow-1"></div>
        <p class="sousalbum-description">Galerie photos de l’entreprise EduTech Solutions</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Album 1 -->
        <div class="col">
            <a href="sous-album_sous.html" class="card-link">
            <div class="card border-0">
                <img src="images/imgAlbum.png" alt="Album 1" class="card-img-top album-image">
                <div class="card-body">
                    <p class="album-description">Développement des Solutions Numériques</p>
                </div>
            </div>
            </a>
        </div>
        <!-- Album 2 -->
        <div class="col">
            <a href="sous-album_sous.html" class="card-link">
            <div class="card border-0">
                <img src="images/imgAlbum.png" alt="Album 2" class="card-img-top album-image">
                <div class="card-body">
                    <p class="album-description">Formations : Utilisation de SmartClass</p>
                </div>
            </div>
            </a>
        </div>
        <!-- Album 3 -->
        <div class="col">
            <a href="sous-album_sous.html" class="card-link">
            <div class="card border-0">
                <img src="images/imgAlbum.png" alt="Album 3" class="card-img-top album-image">
                <div class="card-body">
                    <p class="album-description">Conférence sur l'Éducation Numérique – 2023</p>
                </div>
            </div>
            </a>
        </div>
        <!-- Album 4 -->
        <div class="col">
            <a href="sous-album_sous.html" class="card-link">
            <div class="card border-0">
                <img src="images/imgAlbum.png" alt="Album 4" class="card-img-top album-image">
                <div class="card-body">
                    <p class="album-description">Collaboration avec le Lycée Technique de Lokossa</p>
                </div>
            </div>
            </a>
        </div>
        <!-- Album 5 -->
        <div class="col">
            <a href="sous-album_sous.html" class="card-link">
            <div class="card border-0">
                <img src="images/imgAlbum.png" alt="Album 5" class="card-img-top album-image">
                <div class="card-body">
                    <p class="album-description">Témoignages d'Élèves et Enseignants</p>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="return">
        <a href="sous-album.html" class="back-button">← Retour</a>
    </div>
</div>

<!-- JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="py-4">
    <div class="container">
      <div class="row">
        <!-- Logo et Informations -->
        <div class="col-md-4">
          <img src="icons/logoINSTI 1.png" alt="Logo" class="mb-3" style="width: 80px;"> 
          <p class="mb-0">Lokossa, Agnivedji</p>
          <p><strong>(+229) 22 41 13 66</strong></p>
          <p>"Science et technologie au service de l'homme"</p>
          <a href="mailto:instilokossa@gmail.com" class="text-white"><strong>instilokossa@gmail.com</strong></a>
          <div class="mt-3">
            <!-- Icône Facebook -->
            <a href="https://facebook.com" target="_blank" class="text-white me-3">
              <img src="icons/facebook.svg" alt="Facebook" class="icon-white me-1" style="width: 40px; height: 40px;">
            </a>
            <!-- Icône YouTube -->
            <a href="https://youtube.com" target="_blank" class="text-white me-3">
              <img src="icons/youtube.svg" alt="YouTube" class="icon-white me-1" style="width: 40px; height: 40px;">
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