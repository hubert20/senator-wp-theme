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
                            <!-- Formulrz ogólny -->
                            <div data-category="form-basic" style="display: none;">
                                <?php echo apply_shortcodes('[contact-form-7 id="f5ee6a9" title="Zapytanie"]'); ?>
                            </div>
                            <!-- Formularz z podstrony oferty -->
                            <div data-category="form-details" style="display: none;">
                                <?php echo apply_shortcodes('[contact-form-7 id="3a2093a" title="Zapytanie z podstrony oferty"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-flex offerformModal__right-bg">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                        <span class="round-close"></span>
                        <!-- Right desc form -->
                        <div class="p-3 d-flex flex-column align-items-end text-end justify-content-end w-100">
                            <p class="text-white mb-2 fw-bold fs-20">Napisz lub zadzwoń, <br> a by otrzymać wstępną wycenę projektu.</p>
                            <p class="text-white">Sprzedaż, hurtownia, usługi:</p>
                            <p class="text-white">
                                Agnieszka Obiecka<br>
                                +48 510 261 687<br>
                                agnieszka.sobiecka@senator.com.pl
                            </p>
                            <p class="text-white">
                                Aleksandra Kędzierska<br>
                                +48 502 349 822<br>
                                aleksandra.kedzierska@senator.com.pl
                            </p>
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