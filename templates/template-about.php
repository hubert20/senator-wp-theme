<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Template About */

get_header();

$bg_header_image = get_field('background_image');

?>
<!-- Hero top -->
<section class="d-flex flex-column align-items-center justify-content-center header-image-defeault mb-4 mb-lg-5" style="background-image: url('<?php echo $bg_header_image; ?>')">
    <div class="container">
        <h1 class="playfair-petch-font standard-title-3 fw-bold text-center text-white header-def-title ls-2">
            <span class="d-inline-block icon-text icon-text--white px-4">
                <?php echo esc_html(get_the_title()); ?>
            </span>
        </h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" class="mb-0 breadcrumbs text-center dosis-font fw-light">', '</p>');
        }
        ?>
    </div>
</section>

<section class="pt-lg-5 pt-4 about-wrap bg-white">
    <?php
    while (have_posts()) : the_post();
        the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
    endwhile;
    ?>
</section>

<section class="py-4 py-lg-5 bg-black">
    <div class="container">
        <h2 class="subtitle playfair-petch-font text-center standard-title-4 fw-bolder mb-3 mb-lg-4 position-relative text-yellow">
            <span class="d-inline-block icon-text icon-text--yellow px-4">Skorzystaj z formularza kontaktowego</span>
        </h2>
        <div class="row justify-content-center">
            <div class="col-10 col-lg-3 d-grid">
                <a data-category="form-basic" data-bs-toggle="modal" data-bs-target="#offerformModal" class="btn btn btn--style-2">WYŚLIJ ZAPYTANIE <i class="fa fa-check-square-o"></i></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>