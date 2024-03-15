$(document).ready(function () {
  // TYPEWRITER EFFECT
  const text2 = document.getElementById("positions");
  const texts = [
    " ",
    "Software Engineer",
    "Virtual Assistant",
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

  $(document).ready(function () {
    // TYPEWRITER EFFECT
    const text2 = document.getElementById("positions");
    const texts = [
      " ",
      "Software Engineer",
      "Virtual Assistant",
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

    $('.skill').slick({
      slidesToShow: 5,
      slidesToScroll: 6,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 3000,
      arrows: false,
      dots: false,
      adaptiveHeight: true,
      centerMode: true,
      infinite: true,
      useCSS: false,
      waitForAnimate: true,
      variableWidth: false,
      pauseOnHover: false,
      respondTo: 'min',
      responsive: [
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: false,
            variableWidth: false,
            adaptiveHeight: true,
          }
        }
      ]
    });
  });
});
