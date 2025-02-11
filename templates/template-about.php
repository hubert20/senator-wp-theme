<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Template About */

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

<section class="py-lg-5 py-4 about-wrap px-4">
    <div class="container">

    </div>
</section>

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
endwhile;
?>

<?php get_footer(); ?>