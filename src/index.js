require("bootstrap");
import Swiper from "swiper"
import { Navigation } from 'swiper/modules'

Swiper.use([Navigation]);

(function () {
const swiper = new Swiper('.swiper-main-products', {
  // Default parameters
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
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


  window.addEventListener('scroll', (event) => {
    var btnscroll = document.querySelector('#top-header');
    var scrollValue = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollValue > 0) {
      btnscroll.classList.add("sticky");
    } else {
      btnscroll.classList.remove("sticky");
    }
  });

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

  // Open film in modal
  // Open YouTube testimonials in modal
  const modalVid = document.getElementById('video-sg');
  if (modalVid) {
    let videoSrc;
    // Zbierz wszystkie przyciski wideo i dodaj nasłuchiwanie kliknięć
    document.querySelectorAll('.video-btn').forEach(button => {
      button.addEventListener('click', function () {
        videoSrc = this.getAttribute('data-src');
      });
    });

    // Kiedy modal się otwiera
    document.getElementById('ModalVideo').addEventListener('shown.bs.modal', function () {
      document.getElementById('video').setAttribute('src', `${videoSrc}?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1`);
    });

    // Kiedy modal się zamyka
    document.getElementById('ModalVideo').addEventListener('hide.bs.modal', function () {
      document.getElementById('video').setAttribute('src', videoSrc);
    });
  }
      // Add data-toggle to link menu
      var menuItem = document.querySelector('#menu-item-126 a');
      if (menuItem) {
          menuItem.setAttribute('data-bs-toggle', 'modal');
          menuItem.setAttribute('data-bs-target', '#offerformModal');
      }
})();
