<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package senator-wp-theme
 */
?>


<!-- Offer form Modal -->
<div class="modal fade offerformModal" id="offerformModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0" id="modal-form">
                <div class="d-flex">
                    <div class="col-lg-6 offerformModal__left-bg bg-white">
                        <div class="p-4">
                            <?php echo apply_shortcodes('[contact-form-7 id="f5ee6a9" title="Zapytanie"]'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-flex offerformModal__right-bg">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                        <span class="round-close"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer" role="contentinfo">
    <?php get_template_part('footer-widget'); ?>
</footer>

<div id="cookie-warn" class="cookie-warn">
    <div class="cookie-warn__box">
        <span class="cookie-warn__left-side">
            Użytkowanie oznacza akceptację regulaminu oraz Polityki prywatności, w tym zapisywania plików cookie.
        </span>
        <span class="cookie-warn__right-side">
            <a href="javascript:void(0);" id="close-cookie-warn" class="cookie-warn__close-cookie-info">OK</a>
        </span>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>