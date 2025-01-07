// Sélection des éléments nécessaires
const slides = document.querySelectorAll('.carousel-slide');
const prevButton = document.querySelector('.carousel-control.prev');
const nextButton = document.querySelector('.carousel-control.next');
let currentIndex = 0; // Index de la slide actuellement visible
let isAnimating = false; // Empêche les animations multiples

// Fonction pour afficher une slide avec une transition fluide
function showSlide(index, direction = 'next') {
  if (isAnimating) return; // Bloque les clics multiples pendant l'animation
  isAnimating = true;

  // Assurez-vous que l'index reste dans les limites
  const totalSlides = slides.length;
  const previousIndex = currentIndex;
  currentIndex = (index + totalSlides) % totalSlides;

  const currentSlide = slides[previousIndex];
  const nextSlide = slides[currentIndex];

  // Définir les directions de mouvement
  const outClass = direction === 'next' ? 'move-out-left' : 'move-out-right';
  const inClass = direction === 'next' ? 'move-in-right' : 'move-in-left';

  // Appliquer les classes d'animation
  currentSlide.classList.add(outClass);
  nextSlide.classList.add('active', inClass);

  // Nettoyer après l'animation
  nextSlide.addEventListener('animationend', function handler() {
    currentSlide.classList.remove('active', outClass);
    nextSlide.classList.remove(inClass);
    nextSlide.removeEventListener('animationend', handler);
    isAnimating = false; // Permettre de nouvelles interactions
  });
}

// Ajouter les événements pour les boutons de navigation
prevButton.addEventListener('click', () => {
  showSlide(currentIndex - 1, 'prev');
  resetAutoPlay();
});

nextButton.addEventListener('click', () => {
  showSlide(currentIndex + 1, 'next');
  resetAutoPlay();
});

// Navigation automatique
let autoPlayInterval = setInterval(() => {
  showSlide(currentIndex + 1, 'next');
}, 5000); // Toutes les 2 secondes

// Réinitialisation de l'auto-play après une interaction utilisateur
function resetAutoPlay() {
  clearInterval(autoPlayInterval);
  autoPlayInterval = setInterval(() => {
    showSlide(currentIndex + 1, 'next');
  }, 5000);
}

// Arrêter/reprendre l'auto-play lors du survol
//const carousel = document.querySelector('.carousel');
//carousel.addEventListener('mouseover', () => clearInterval(autoPlayInterval));
//carousel.addEventListener('mouseout', resetAutoPlay);

// Afficher la première slide par défaut
slides[currentIndex].classList.add('active');