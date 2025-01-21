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
    <div class="container top-hero__cnt position-relative">
        <!-- Hero slider -->
        <div class="top-hero__slider py-5 py-lg-0">
            <!-- Slider main container -->
            <div class="swiper swiper-container main-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php if (have_rows('hero_cnt_slider')) : ?>
                        <?php
                        while (have_rows('hero_cnt_slider')) : the_row();
                            $hero_img = get_sub_field('hero_cnt_image');
                            $hero_cnt = get_sub_field('hero_cnt_slider');
                        ?>
                            <div class="swiper-slide">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <?php echo $hero_cnt; ?>
                                    </div>
                                    <div class="col-6 col-lg-4 text-center">
                                        <?php if ($hero_img) : ?>
                                            <img src="<?php echo $hero_img['url']; ?>" alt="<?php echo $hero_img['alt']; ?>" class="img-fluid mx-auto">
                                        <?php endif; ?>
                                    </div>
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