<!-- Slider with products -->
<section class="main-products-slider p-relative p-4 py-lg-5 bg-white" id="main-products-offer-slider">
    <h2 class="text-center mb-4 mb-lg-5 playfair-petch-font standard-title-4">
        <span class="d-inline-block icon-text px-4">Systemy drzwi przesuwnych i szaf garderobianych</span>
    </h2>
    <div class="swiper swiper-main-products">
        <div class="swiper-wrapper">
            <?php
            $query = new WP_Query(array('category_name' => 'szafy-przesuwne', 'posts_per_page' => 10));
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $subtitle = get_field('wypelnienie_subtitle');
                    $type_system = get_field('rodzaj_systemu');
            ?>
                    <div class="swiper-slide">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="main-products-slider__item position-relative text-decoration-none d-block" title="<?php echo esc_attr(get_the_title()); ?>">
                            <span class="main-products-slider__item--btn">
                                <span>Czytam opis ></span>
                            </span>
                            <span class="main-products-slider__item--statictitle playfair-petch-font fw-lighter mt-2 lh-11 text-center text-white">
                                <?php echo $type_system; ?>
                            </span>
                            <h3 class="main-products-slider__item--title text-decoration-none d-block text-white standard-title-5 text-center playfair-petch-font">
                                <?php echo esc_attr(get_the_title()); ?>
                                <span class="main-products-slider__item--subtitle text-yellow dosis-font fw-lighter"><?php echo $subtitle; ?></span>
                            </h3>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            <?php endif; ?>
                        </a>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
    <div class="position-relative d-flex align-items-center justify-content-center">
        <div class="swiper-main-products__prev swiper-button-prev"></div>
        <div class="swiper-main-products__next swiper-button-next"></div>
    </div>
</section>