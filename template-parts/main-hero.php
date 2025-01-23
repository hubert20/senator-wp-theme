<?php
$hero_background_desktop = get_field('hero_background_desktop');
$hero_background_mobile = get_field('hero_background_mobile');
?>

<div id="hero" class="top-hero position-relative d-flex justify-content-center flex-column mx-lg-4 z-0">
    <!-- <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/Port-additional-img-1.jpg" id="slide-1" class="img-fluid d-none" alt="">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/Port-additional-img-4.jpg" id="slide-2" class="img-fluid d-none" alt="">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/Port-additional-img-6.jpg" id="slide-3" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/home-6-port-2.jpg" id="slide-4" class="img-fluid d-none" alt="">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/home-6-port-5.jpg" id="slide-5" class="img-fluid d-none" alt="">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/home-6-port-8.jpg" id="slide-6" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/Port-additional-img-2.jpg" id="slide-7" class="img-fluid d-none" alt="">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/Port-additional-img-3.jpg" id="slide-8" class="img-fluid d-none" alt="">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/Port-additional-img-5.jpg" id="slide-9" class="img-fluid" alt="">
            </div>
        </div>
    </div> -->

    <!-- Hero Cnt -->
    <div class="top-hero__cnt position-relative">
        <!-- Hero slider -->
        <div class="top-hero__slider py-5 py-lg-0">
            <!-- Slider main container -->
            <div class="swiper swiper-container swiper-hero main-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php if (have_rows('hero_slider')) : ?>
                        <?php
                        while (have_rows('hero_slider')) : the_row();
                            $hero_bg = get_sub_field('hero_slider_bg');
                            $hero_cnt = get_sub_field('hero_slider_cnt');
                        ?>
                            <div class="swiper-slide">
                                <div class="slide-inner" style="background-image:url('<?php echo $hero_bg; ?>')">
                                    <?php echo $hero_cnt; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Anchor-->
    <a href="#iframe-hauses" class="tst-scroll-hint-frame tst-anchor-scroll">
        <div class="tst-scroll-hint"></div>
    </a>
</div>

<!-- BG Hero -->
<style>
    @media (min-width: 992px) {
        .top-hero {
            background-image: url('<?php echo $hero_background_desktop; ?>') !important;
        }
    }

    .top-hero {
        background-image: url('<?php echo $hero_background_mobile; ?>');
    }
</style>

<style>
    .swiper-container {
        height: calc(100vh - 120px);
        margin: 60px;
    }

    .swiper-slide {
        overflow: hidden;
    }

    .slide-inner {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-size: cover;
        background-position: center;
    }
</style>

<!-- <script>
var interleaveOffset = 0.5;

var swiperOptions = {
  loop: true,
  speed: 1000,
  grabCursor: true,
  watchSlidesProgress: true,
  mousewheelControl: true,
  keyboardControl: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  on: {
    progress: function() {
      var swiper = this;
      for (var i = 0; i < swiper.slides.length; i++) {
        var slideProgress = swiper.slides[i].progress;
        var innerOffset = swiper.width * interleaveOffset;
        var innerTranslate = slideProgress * innerOffset;
        swiper.slides[i].querySelector(".slide-inner").style.transform =
          "translate3d(" + innerTranslate + "px, 0, 0)";
      }      
    },
    touchStart: function() {
      var swiper = this;
      for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
      }
    },
    setTransition: function(speed) {
      var swiper = this;
      for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = speed + "ms";
        swiper.slides[i].querySelector(".slide-inner").style.transition =
          speed + "ms";
      }
    }
  }
};

var swiper = new Swiper(".swiper-hero", swiperOptions);
</script> -->