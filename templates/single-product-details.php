<?php
if (!defined('ABSPATH')) exit;

/* 
Template Name: Template product details 
Template Post Type: post
*/

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
<div class="container">
    <div class="row mb-4 mb-lg-5">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <!-- Gallery slider -->
            <?php if (have_rows('slider')) : ?>
                <div class="row">
                    <?php
                    while (have_rows('slider')) : the_row();
                        $image_slider = get_sub_field('image');
                    ?>
                        <img src="<?php echo $image_slider['url']; ?>" alt="<?php echo $image_slider['alt']; ?>" class="img-fluid mx-auto">
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <!-- Descriptions product-->
            <?php
            while (have_posts()) : the_post();
                the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
            endwhile;
            ?>
        </div>
    </div>

    <!-- tabs profil -->
    <ul class="tabs-details-nav nav nav-tabs mt-1 mb-2 mt-lg-4 mb-lg-4 justify-content-center playfair-petch-font" id="pills-tab" role="tablist">
        <!-- Kolory profili nav-tabs -->
        <li class="nav-item p-1 p-lg-0 col">
            <a class="nav-link text-center active" id="color-profil-tab" data-bs-toggle="pill" href="#color-profil" role="tab" aria-controls="color-profil" aria-selected="true">Kolory profili</a>
        </li>
        <!-- Wypełnienia profili nav-tabs -->
        <li class="nav-item p-1 p-lg-0 col">
            <a class="nav-link text-center" id="filling-profil-tab" data-bs-toggle="pill" href="#filling-profil" role="tab" aria-controls="filling-profil" aria-selected="false">Wypełnienia profili</a>
        </li>
        <!-- Konfiguracje nav-tabs -->
        <li class="nav-item p-1 p-lg-0 col">
            <a class="nav-link text-center" id="config-profil-tab" data-bs-toggle="pill" href="#config-profil" role="tab" aria-controls="config-profil" aria-selected="false">Konfiguracje</a>
        </li>
    </ul>

    <!-- Tabcontent descriptions products -->
    <div class="tab-content form-helping mb-3 mb-lg-5" id="pills-tabContent">
        <!-- Kolory profili tab-content -->
        <div class="tab-pane fade active show color-profil" id="color-profil" role="tabpanel" aria-labelledby="color-profil-tab">
            <?php if (have_rows('kolory')) : ?>
                <div class="row">
                    <?php
                    while (have_rows('kolory')) : the_row();
                        $title_color = get_sub_field('title');
                        $image_color = get_sub_field('image');
                    ?>
                        <div class="col-4 col-md-2 text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center mb-2">
                                    <div class="color-profil__item text-center mb-2 p-2 bg-white">
                                        <?php if ($image_color) : ?>
                                            <img src="<?php echo $image_color['url']; ?>" alt="<?php echo $image_color['alt']; ?>" class="img-fluid mx-auto mb-2">
                                        <?php endif; ?>
                                        <p class="mb-0 lh-13"><?php echo $title_color; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- Wypełnienia profili tab-content -->
        <div class="tab-pane fade filling-profil" id="filling-profil" role="tabpanel" aria-labelledby="filling-profil-tab">
            <?php if (have_rows('wypelnienia_profili')) : ?>
                <div class="row">
                    <?php
                    while (have_rows('wypelnienia_profili')) : the_row();
                        $title_filling = get_sub_field('title');
                        $image_filling = get_sub_field('image');
                    ?>
                        <div class="col-lg-2 text-center">
                            <div class="filling-profil__item text-center mb-2 p-2">
                                <?php if ($image_filling) : ?>
                                    <img src="<?php echo $image_filling['url']; ?>" alt="<?php echo $image_filling['alt']; ?>" class="img-fluid mx-auto mb-2">
                                <?php endif; ?>
                                <p class="mb-0"><?php echo $title_filling; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- Konfiguracje tab-content -->
        <div class="tab-pane fade config-profil" id="config-profil" role="tabpanel" aria-labelledby="config-profil-tab">

            <!-- Treści/pliki do pobrania -->

        </div>
    </div>

    <!-- CTA btns -->
    <div class="row justify-content-center">
        <div class="col-lg-3 d-grid">
            <a data-togle="bs-modal" href="#form-box" class="btn btn--style-3" title="Wyślij zapytanie">Zobacz wszystkie systemy SENATOR</a>
        </div>
        <div class="col-lg-3 d-grid">
            <a data-togle="bs-modal" href="#form-box" class="btn btn--style-3" title="Wyślij zapytanie">Wyślij zapytanie</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>