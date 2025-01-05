<!-- Slider with products -->
<section class="py-4 main-products-slider p-relative px-lg-4">
    <h2 class="text-center mb-4 mb-lg-5 playfair-petch-font standard-title-4">Systemy drzwi przesuwnych i szaf garderobianych</h2>
    <div class="swiper swiper-main-products">
        <div class="swiper-wrapper">
            <?php
            $query = new WP_Query(array('category_name' => 'szafy-przesuwne', 'posts_per_page' => 10));
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="swiper-slide">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="main-products-slider__item position-relative text-decoration-none d-block" title="<?php echo esc_attr(get_the_title()); ?>">
                        <h3 class="main-products-slider__item--title text-center text-white playfair-petch-font"><?php the_title(); ?></h3>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            <?php endif; ?>
                        </a>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>