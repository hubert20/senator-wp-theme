<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Template contact */

get_header();

$bg_header_image = get_field('background_image');

?>

<!-- Hero top -->
<section class="d-flex flex-column align-items-center justify-content-center header-image-defeault" style="background-image: url('<?php echo $bg_header_image; ?>')">
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

<section class="py-lg-5 py-4 bg-white px-4 ruler-top">
    <div class="container">
        <?php
        while (have_posts()) : the_post();
            the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
        endwhile;
        ?>
    </div>
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

<!-- Mapa google -->
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.153399012492!2d19.466619977169625!3d52.43854484225641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47193473627919bb%3A0xe077185f72a0d0e3!2sSenator%20Sp.%20z%20o.o.!5e1!3m2!1spl!2spl!4v1739740108597!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php get_footer(); ?>