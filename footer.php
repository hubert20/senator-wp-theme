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
<div class="modal fade" id="offerformModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body" id="modal-form">
                <div class="modal-form-cnt">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo apply_shortcodes('[contact-form-7 id="38" title="Formularz oferty"]'); ?>
                        </div>
                        <div class="col-lg-6 d-none d-lg-flex modal-form-cnt__right-bg">
                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
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