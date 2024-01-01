$(document).ready(function () {
  // TYPEWRITER EFFECT
  const text2 = document.getElementById("positions");
  const texts = [
    " ",
    "Web Developer",
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

  // AOS INITIALIZATION
  AOS.init();

  // SLICK

  $(".skill").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3500,
    arrows: false,
    dots: false,
    waitForAnimate: true,
    useCSS: false,
    variableWidth: true,
    infinite: true,
    pauseOnHover: false,
  });
});
