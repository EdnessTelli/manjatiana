// Initialisation de Typed.js
document.querySelector('.typed-te')
// Récupération des phrases
const typedStrings = document.querySelector('.typed-text').textContent;

// Initialisation de l'animation Typed.js
new Typed('.typed-te', {
  strings: typedStrings.split(','), // Divise les phrases par virgules
  typeSpeed: 100, // Vitesse de frappe
  backSpeed: 50,  // Vitesse d'effacement
  smartBackspace: false, // Forcer l'effacement complet
  loop: true, // Répéter l'animation
  startDelay: 500 // Délai avant le démarrage
});


// header
// script menu
const header = document.querySelector('header');
let dom = document.querySelector('.dom');
let updown = document.querySelector('.updown')


window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 100)
  dom.classList.toggle("sticky", window.scrollY > 100)
  updown.classList.toggle("sticky", window.scrollY > 200)

});

const links = document.querySelector('.navlinks');
const menu = document.querySelector('.telli');
menu.addEventListener('click', () => {
  links.classList.toggle('active');
   
});

const lin= document.querySelectorAll('.navlinks a');
lin.forEach((lim)=>{
  lim.addEventListener('click',() =>{
  links.classList.remove('active');

  })

}) 

window.onload = function () {
  setTimeout(function () {
      document.querySelector(".loader").style.display = "none";
      document.querySelector("header").style.display = "flex";
  }, 3000); // Temps de chargement de 2 secondes
};

ScrollReveal().reveal('.right', {
  delay: 500,
  distance: '50px',
  origin: 'right',

  duration: 2000,
  reset: 'false',
});
ScrollReveal().reveal(' .left', {
  delay: 500,
  distance: '50px',
  origin: 'left',

  duration: 2000,
  reset: 'false',
});
ScrollReveal().reveal(' .lefte', {
  delay: 500,
  distance: '50px',
  origin: 'left',

  duration: 2000,
  reset: 'false',
});
ScrollReveal().reveal('.bottom', {
  delay: 500,
  distance: '50px',
  origin: 'bottom',

  duration: 2000,
  reset: 'false',
});
ScrollReveal().reveal('.bottome', {
  delay: 500,
  distance: '50px',
  origin: 'bottom',

  duration: 2000,
  reset: 'false',
});
ScrollReveal().reveal('.top', {
  delay: 500,
  distance: '50px',
  origin: 'top',

  duration: 2000,
  reset: 'false',
});
ScrollReveal().reveal('.tope', {
  delay: 500,
  distance: '50px',
  origin: 'top',

  duration: 2000,
  reset: 'false',
});