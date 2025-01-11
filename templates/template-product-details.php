<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Template product details */

get_header();


$bg_header_image = get_field('bg_header_image');

?>
<!-- Hero top -->
<section class="d-flex flex-column align-items-center justify-content-center header-image-defeault mb-4 mb-lg-5">
    <div class="container">
        <h1 class="playfair-petch-font standard-title-3 fw-bold text-center text-white header-def-title">
            <?php the_title(); ?>
        </h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" class="mb-0 breadcrumbs text-center dosis-font fw-bold">', '</p>');
        }
        ?>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <!-- Gallery slider -->
            <?php if (have_rows('slider')) : ?>
                <div class="row">
                    <?php
                    while (have_rows('slider')) : the_row();
                        $image_slider = get_sub_field('image');
                    ?>

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
    <ul class="nav nav-tabs mt-1 mb-2 mt-lg-4 mb-lg-4 justify-content-center" id="pills-tab" role="tablist">
        <!-- Kolory profili nav-tabs -->
        <li class="nav-item p-1 p-lg-0 col">
            <a class="nav-link text-center active" id="color-profil-tab" data-toggle="pill" href="#color-profil" role="tab" aria-controls="color-profil" aria-selected="false">Kolory profili</a>
        </li>
        <!-- Wypełnienia profili nav-tabs -->
        <li class="nav-item p-1 p-lg-0 col">
            <a class="nav-link text-center active" id="filling-profil-tab" data-toggle="pill" href="#filling-profil" role="tab" aria-controls="filling-profil" aria-selected="true">Wypełnienia profili</a>
        </li>
        <!-- Konfiguracje nav-tabs -->
        <li class="nav-item p-1 p-lg-0 col">
            <a class="nav-link text-center" id="config-profil-tab" data-toggle="pill" href="#config-profil" role="tab" aria-controls="config-profil" aria-selected="true">Konfiguracje</a>
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
                        <div class="col-lg-3 text-center">
                            <div class="color-profil__item text-center">
                                <?php if ($image_color) : ?>
                                    <img src="<?php echo $image_color['url']; ?>" alt="<?php echo $image_color['alt']; ?>" class="img-fluid mx-auto">
                                <?php endif; ?>
                                <?php echo $title_color; ?>
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
                        <div class="col-lg-3 text-center">
                            <div class="filling-profil__item text-center">
                                <?php if ($image_filling) : ?>
                                    <img src="<?php echo $image_filling['url']; ?>" alt="<?php echo $image_filling['alt']; ?>" class="img-fluid mx-auto">
                                <?php endif; ?>
                                <?php echo $title_filling; ?>
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
</div>

<?php get_footer(); ?>