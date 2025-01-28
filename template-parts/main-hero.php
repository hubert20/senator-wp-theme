<div id="hero" class="top-hero position-relative d-flex justify-content-center flex-column z-0">
    <!-- Hero Cnt -->
    <div class="top-hero__cnt position-relative">
        <!-- Hero slider -->
        <div class="top-hero__slider">
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