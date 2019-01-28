'use strict'

function frontPageMenu() {
  var navbar = document.getElementById('js-fp-navbar');
  var hamburger = document.getElementById('js-hamburger');
  hamburger.addEventListener("click", function(ev) {
    navbar.classList.toggle('open');
    hamburger.classList.toggle('open');
  });
}

function scrollEvent() {
  window.addEventListener('scroll', function(e) {
    console.log(window.scrollY);
  });
}

document.addEventListener("DOMContentLoaded", function(event) {
  frontPageMenu();
});

// console.log(document.getElementById('js-jumbotron').getBoundingClientRect());
