// Sélection des éléments nécessaires
const slides = document.querySelectorAll('.carousel-slide'); // Toutes les slides
const prevButton = document.querySelector('.carousel-control.prev'); // Bouton précédent
const nextButton = document.querySelector('.carousel-control.next'); // Bouton suivant
let currentIndex = 0; // Index de la slide actuellement visible

// Fonction pour afficher une slide donnée
function showSlide(index) {
  // Assurez-vous que l'index reste dans les limites
  if (index < 0) {
    index = slides.length - 1; // Retourne à la dernière slide
  } else if (index >= slides.length) {
    index = 0; // Retourne à la première slide
  }

  // Retirer la classe 'active' de toutes les slides
  slides.forEach(slide => {
    slide.classList.remove('active');
  });

  // Ajouter la classe 'active' à la slide courante
  slides[index].classList.add('active');

  // Met à jour l'index courant
  currentIndex = index;
}

// Ajouter les événements pour les boutons de navigation
prevButton.addEventListener('click', () => {
  showSlide(currentIndex - 1); // Afficher la slide précédente
});

nextButton.addEventListener('click', () => {
  showSlide(currentIndex + 1); // Afficher la slide suivante
});

// Navigation automatique (optionnel)
let autoPlayInterval = setInterval(() => {
  showSlide(currentIndex + 1); // Passer à la slide suivante
}, 3000); // Toutes les 3 secondes

// Stopper la navigation automatique lors de l'interaction de l'utilisateur
[prevButton, nextButton].forEach(button => {
  button.addEventListener('click', () => {
    clearInterval(autoPlayInterval); // Arrêter le défilement automatique
  });
});

// Afficher la première slide par défaut
showSlide(currentIndex);

