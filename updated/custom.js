// FUNCTION FOR HAMBURGER MENU
function myFunction() {
  var x = document.getElementById("navContent");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

// TYPEWRITER EFFECT FOR THE POSITIONS
const text2 = document.getElementById("text");
const texts = [
  "Front End Web Developer",
  "Virtual Assistant",
  "Software Engineer",
];
let index = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
  const text = texts[index];
  if (isDeleting) {
    text2.textContent = text.substring(0, charIndex - 1);
    charIndex--;
    if (charIndex === 0) {
      isDeleting = false;
      index = (index + 1) % texts.length;
    }
  } else {
    text2.textContent = text.substring(0, charIndex + 1);
    charIndex++;
    if (charIndex === text.length) {
      isDeleting = true;
      setTimeout(typeEffect, 1000);
      return;
    }
  }
  setTimeout(typeEffect, 100);
}

typeEffect();

// SWAP PROFILE AND CONTENT ON 992PX BELOW
var swapped = false;

function swapElements() {
  if ($(window).width() <= 992 && !swapped) {
    $(".swap2").prependTo(".swap-cont");
    swapped = true;
  } else if ($(window).width() > 992 && swapped) {
    $(".swap2").appendTo(".swap-cont");
    swapped = false;
  }
}
