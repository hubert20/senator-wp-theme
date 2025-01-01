<!-- Slider with products -->
<section class="py-4 main-products-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $query = new WP_Query(array('category_name' => 'system-drzwi-przesuwnych', 'posts_per_page' => 10));
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="swiper-slide">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="text-decoration-none">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
        });
    </script>

</section>