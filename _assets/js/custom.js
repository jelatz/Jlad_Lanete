AOS.init();
// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 700, // values from 0 to 3000, with step 50ms
  easing: "ease", // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});

const loader = document.querySelector(".spinner-grow");

window.addEventListener("Load", () => {
  loader.style.opacity = "0";

  setTimeout(() => {
    loader.style.display = "none";
  }, 100);
});

// TYPE WRITTER effect

const text2 = document.getElementById("text2");
const texts = [
  "Web Developer",
  "Virtual assistant",
  "Adobe Analytics Developer",
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
