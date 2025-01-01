<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>

<!-- Main products slider -->
<?php get_template_part('template-parts/main-products-slider'); ?>

<!-- Main about senator -->
<?php get_template_part('template-parts/main-about'); ?>

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
endwhile;
?>

<?php get_footer(); ?>