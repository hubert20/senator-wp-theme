<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Template News */

get_header();

$bg_header_image = get_field('background_product');

?>
<!-- Hero top -->
<section class="d-flex flex-column align-items-center justify-content-center header-image-defeault mb-4 mb-lg-5" style="background-image: url('<?php echo $bg_header_image; ?>')">
    <div class="container">
        <h1 class="playfair-petch-font standard-title-3 fw-bold text-center text-white header-def-title ls-2">
            <?php echo esc_html(get_the_title()); ?>
        </h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" class="mb-0 breadcrumbs text-center dosis-font fw-light">', '</p>');
        }
        ?>
    </div>
</section>

<section class="py-lg-5 py-4 news-wrap px-4">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $query = new WP_Query(array('category_name' => 'aktualnosci', 'posts_per_page' => 10));
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="col-lg-4">
                        <div class="list-news__item d-flex flex-column">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php
                                $imgID  = get_post_thumbnail_id($post->ID);
                                $image  = wp_get_attachment_image_src($imgID, 'news-width', false, '');
                                $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                ?>
                                <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>" class="d-block">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid main-news__img">
                                </a>
                            <?php endif; ?>
                            <div class="p-3 p-lg-4 main-news__item-cnt position-relative d-flex flex-grow-1 flex-column bg-white">
                                <?php if ('post' === get_post_type()) : ?>
                                    <span class="main-news__item-date py-1"><?php echo get_the_date(); ?></span>
                                <?php endif; ?>
                                <div class="main-news__item-box d-flex flex-column flex-grow-1">
                                    <p class="main-news__item-title-post playfair-petch-font fw-bold lh-12 flex-grow-1">
                                        <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>" class="text-dark">
                                            <?php echo wp_trim_words(get_the_title(), 15, ' [...]'); ?>
                                        </a>
                                    </p>
                                    <p class="text-right mb-0">
                                        <a href="<?php echo esc_url(get_permalink()); ?>" class="text-dark bg-yellow py-1 px-2" title="<?php echo esc_attr(get_the_title()); ?>" style="border-radius: 3px;">
                                            Czytam <i class="fa fa-angle-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
endwhile;
?>

<?php get_footer(); ?>