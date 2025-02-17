require("bootstrap");
import Swiper from "swiper"
import { Navigation, Keyboard, Thumbs } from 'swiper/modules'


// Zarejestrowanie modułów
Swiper.use([Navigation, Keyboard, Thumbs]);

(function () {
  const swiper = new Swiper('.swiper-main-products', {
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-main-products__next",
      prevEl: ".swiper-main-products__prev",
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  })

  const swiperNesw = new Swiper('.swiper-news', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-main-news__next",
      prevEl: ".swiper-main-news__prev",
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  })
  //Gallery single
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 5,
    slidesPerView: 4,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    watchOverflow: true,
    observer: true,
    observeParents: true,
  });

  var galleryTop = new Swiper('.gallery-slider', {
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
    observer: true,
    observeParents: true,
  });

  // Scroll Counter number
  var counted = 0;

  window.addEventListener('scroll', function () {
    var counterElement = document.getElementById('counter');

    // Check if counterElement exists
    if (!counterElement) return;

    var oTop = counterElement.offsetTop - window.innerHeight;

    if (counted === 0 && window.scrollY > oTop) {
      var countElements = document.querySelectorAll('.count');
      countElements.forEach(function (countElement) {
        var countTo = parseInt(countElement.getAttribute('data-count'));
        var currentCount = parseInt(countElement.textContent);

        var startCount = { countNum: currentCount };

        var duration = 2000;
        var startTime = null;

        function animateCount(timestamp) {
          if (!startTime) startTime = timestamp;
          var progress = timestamp - startTime;
          var stepCount = Math.min(progress / duration, 1) * (countTo - currentCount) + currentCount;

          countElement.textContent = Math.floor(stepCount);

          if (progress < duration) {
            requestAnimationFrame(animateCount);
          } else {
            countElement.textContent = countTo; // Final value
          }
        }

        requestAnimationFrame(animateCount);
      });

      counted = 1;
    }
  });

  //Swiper hero
  const interleaveOffset = 0.5;

  const swiperOptions = {
    loop: true,
    speed: 1000,
    grabCursor: true,
    watchSlidesProgress: true,
    //mousewheel: true, // Aktywacja obsługi kółka myszy
    keyboard: {
      enabled: true, // Aktywacja obsługi klawiatury
    },
    navigation: {
      nextEl: ".swiper-hero-button-next",
      prevEl: ".swiper-hero-button-prev",
    },
    on: {
      progress(swiper) {
        swiper.slides.forEach((slide) => {
          const slideProgress = slide.progress;
          const innerOffset = swiper.width * interleaveOffset;
          const innerTranslate = slideProgress * innerOffset;
          const inner = slide.querySelector(".slide-inner");
          if (inner) {
            inner.style.transform = `translate3d(${innerTranslate}px, 0, 0)`;
          }
        });
      },
      touchStart(swiper) {
        swiper.slides.forEach((slide) => {
          slide.style.transition = "";
        });
      },
      setTransition(swiper, speed) {
        swiper.slides.forEach((slide) => {
          slide.style.transition = `${speed}ms`;
          const inner = slide.querySelector(".slide-inner");
          if (inner) {
            inner.style.transition = `${speed}ms`;
          }
        });
      },
    },
  };

  // Inicjalizacja Swipera
  const heroSwiper = new Swiper(".swiper-hero", swiperOptions);
  // Add data-toggle to link menu
  var menuItem = document.querySelector('#menu-item-194 a');
  if (menuItem) {
    menuItem.setAttribute('data-bs-toggle', 'modal');
    menuItem.setAttribute('data-bs-target', '#offerformModal');
    menuItem.setAttribute('data-category', 'form-basic');
  }

  //
  var modal = document.getElementById('offerformModal');
  if (modal) {
    modal.addEventListener('shown.bs.modal', function () {
      var pageTitleField = document.querySelector('#offerformModal input[name="page-title-system"]');
      if (pageTitleField) {
        pageTitleField.value = document.title;
      }
    });
  }

  document.querySelectorAll("[data-bs-toggle='modal']").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var category = this.getAttribute("data-category"); // Pobranie kategorii z buttona

      if (modal) {
        setTimeout(function () { // Opóźnienie, aby modal miał czas na załadowanie
          modal.querySelectorAll("[data-category]").forEach(function (form) {
            if (form.getAttribute("data-category") === category) {
              form.style.display = "block"; // Pokazanie odpowiedniego formularza
            } else {
              form.style.display = "none"; // Ukrycie innych formularzy
            }
          });
        }, 200); // Można zwiększyć, jeśli CF7 ładuje się z opóźnieniem
      }
    });
  });






})();
