<?php
/**
 * Template for displaying WooCommerce product archive (main shop page).
 * Nadpisuje domyślną strukturę WooCommerce dla większej kontroli.
 *
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>



<main id="main" class="site-main">
  <div class="container py-4 py-lg-5">

    <?php
    /**
     * Możesz dodać breadcrumb tutaj, jeśli chcesz:
     * do_action( 'woocommerce_breadcrumb' );
     */
    ?>

    <?php
    // Nagłówek kategorii lub tytuł strony sklepu
    do_action( 'woocommerce_shop_loop_header' );
    ?>

    <?php if ( woocommerce_product_loop() ) : ?>

      <?php
      do_action( 'woocommerce_before_shop_loop' );

      woocommerce_product_loop_start();

      if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
          the_post();

          do_action( 'woocommerce_shop_loop' );

          wc_get_template_part( 'content', 'product' );
        }
      }

      woocommerce_product_loop_end();

      do_action( 'woocommerce_after_shop_loop' );
      ?>

    <?php else : ?>

      <?php do_action( 'woocommerce_no_products_found' ); ?>

    <?php endif; ?>

  </div><!-- /.container -->
</main>

<?php
// Możesz wyświetlić sidebar jeśli potrzebujesz
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
