<?php
if (!defined('ABSPATH')) exit;

get_header();


?>

<main id="" class="pb-lg-5" role="main">
    <?php
    while (have_posts()) : the_post();
        the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'senator-wp-theme'));
    endwhile;
    ?>
</main>

<?php get_footer(); ?>