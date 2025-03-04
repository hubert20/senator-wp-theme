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
<div class="modal fade offerformModal" id="offerformModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0" id="modal-form">
                <div class="d-flex">
                    <div class="col-lg-6 offerformModal__left-bg bg-white position-relative">
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
                        <!-- Right desc form -->
                        <div class="p-3 d-flex flex-column align-items-end text-end justify-content-end w-100">
                            <p class="text-white mb-2 fw-bold fs-20">Wypełnij formularz lub zadzwoń, <br> a by otrzymać wstępną wycenę projektu.</p>
                            <p class="text-white">Sprzedaż, hurtownia, usługi:</p>
                            <p class="text-white">
                                <strong>Agnieszka Sobiecka</strong><br>
                                <i class="fa fa-phone"></i> +48 510 261 687<br>
                                <a href="mailto:agnieszka.sobiecka@senator.com.pl" title="agnieszka.sobiecka@senator.com.pl" class="text-yellow">
                                <i class="fa fa-envelope"></i> agnieszka.sobiecka@senator.com.pl
                                </a>
                            </p>
                            <p class="text-white">
                                <strong>Aleksandra Kędzierska</strong><br>
                                <i class="fa fa-phone"></i> +48 502 349 822<br>
                                <a href="mailto:agnieszka.sobiecka@senator.com.pl" title="agnieszka.sobiecka@senator.com.pl" class="text-yellow">
                                <i class="fa fa-envelope"></i> aleksandra.kedzierska@senator.com.pl
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- Close btn -->
                    <button type="button" class="btn-close btn-close-mobile" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <span class="round-close d-none d-lg-inline-block"></span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Film -->
<div class="modal modal-video fade" id="ModalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered align-items-center modal-xl" role="document">
        <div class="modal-content border-0">
            <div class="modal-body">
                <button type="button" class="btn-close btn-close-white close-video" data-bs-dismiss="modal" aria-label="Close" title="Zamknij film"></button>
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
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