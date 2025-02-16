<?php
if (!defined('ABSPATH')) exit;

/* 
Template Name: Template news details 
Template Post Type: post
*/

get_header();

$bg_header_image = get_field('background_product');

?>
<!-- Hero top -->
<section class="d-flex flex-column align-items-center justify-content-center header-image-defeault">
    <div class="container">
        <h2 class="playfair-petch-font standard-title-3 fw-bold text-center text-white header-def-title ls-2">
            Aktualności
        </h2>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" class="mb-0 breadcrumbs text-center dosis-font fw-light">', '</p>');
        }
        ?>
    </div>
</section>

<section class="py-4 py-lg-5 container-news">
    <div class="container">
        <div class="text-center">
            <?php if ('post' === get_post_type()) : ?>
                <span class="main-news__item-date py-1 text-gray"><?php echo get_the_date(); ?></span>
            <?php endif; ?>
        </div>
        <h1 class="playfair-petch-font standard-title-4 fw-bold text-center header-def-title lh-1">
            <span class="bg-yellow-mark"><?php echo esc_html(get_the_title()); ?></span>
        </h1>
        <?php
        while (have_posts()) : the_post();
            the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>