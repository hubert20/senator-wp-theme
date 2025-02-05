require("bootstrap");
import Swiper from "swiper"
import { Navigation, Keyboard } from 'swiper/modules'


// Zarejestrowanie modułów
Swiper.use([Navigation, Keyboard]);

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

  // Scroll Counter number
  var counted = 0;
  window.addEventListener('scroll', function () {

    var counterElement = document.getElementById('counter');
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
            countElement.textContent = countTo; // Ustaw ostateczną wartość
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
  var menuItem = document.querySelector('#menu-item-126 a');
  if (menuItem) {
    menuItem.setAttribute('data-bs-toggle', 'modal');
    menuItem.setAttribute('data-bs-target', '#offerformModal');
  }
})();
