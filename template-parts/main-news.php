<!-- News -->
<section class="main-news p-relative p-4 py-lg-5">
    <h2 class="text-center mb-4 mb-lg-5 playfair-petch-font standard-title-4 text-white">
        <span class="d-inline-block icon-text icon-text--white px-4">Aktualności SENATOR</span>
    </h2>
    <div class="swiper swiper-news">
        <div class="swiper-wrapper">
            <?php
            $query = new WP_Query(array('category_name' => 'aktualnosci', 'posts_per_page' => 10));
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="swiper-slide d-flex">
                        <div class="main-news__item d-flex flex-column">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php
                                $imgID  = get_post_thumbnail_id($post->ID);
                                $image  = wp_get_attachment_image_src($imgID, 'sg-width', false, '');
                                $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                ?>
                                <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>" class="d-block">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid main-news__img">
                                </a>
                            <?php endif; ?>
                            <div class="main-news__item-cnt position-relative d-flex flex-grow-1 flex-column">
                                <?php if ('post' === get_post_type()) : ?>
                                    <span class="main-news__item-date px-3 py-1 text-white bg-red-light"><?php echo get_the_date(); ?></span>
                                <?php endif; ?>
                                <div class="p-3 p-lg-4 pt-5 bg-white main-news__item-box d-flex flex-column flex-grow-1">
                                    <p class="main-news__item-title-post">
                                        <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>" class="text-dark lh-12">
                                            <?php echo wp_trim_words(get_the_title(), 15, ' [...]'); ?>
                                        </a>
                                    </p>
                                    <p class="text-right mb-0"><a href="<?php echo esc_url(get_permalink()); ?>" class="text-red-light" title="<?php echo esc_attr(get_the_title()); ?>">Czytam <i class="fa fa-angle-right"></i></a></p>
                                </div>
                            </div>
                        </div>
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