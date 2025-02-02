<!-- Footer -->
<section class="footer-widgets">
    <div class="container py-4 py-lg-5">
        <div class="row justify-content-center">
            <div class="col-8 col-lg-3 text-center">
                <img src="http://localhost:81/wordpress/wp-content/uploads/2025/01/logo-white-yellow-1.png" class="img-fluid mb-4 mb-lg-5 mx-auto">
            </div>
        </div>
        <div class="footer-widgets__logo mb-4 mb-lg-5"></div>
        <div class="row justify-content-center">


            <div class="col-lg-4 footer-widgets__bottom-desc pe-lg-5 mb-4 mb-lg-0">
                <p class="bottom fw-lighter">
                <h5 class="text-yellow standard-title-7 playfair-petch-font mb-2 mb-lg-4 fw-bold">O nas</h5>
                Jesteśmy firmą zajmującą się projektowaniem, produkcją i montażem konstrukcji drewnianych.
                Na&nbsp;rynku istniejemy od 2003 roku, w związku z tym oferujemy Państwu bogate doświadczenie,
                fachowość i przede wszystkim pokaźną, wciąż rozwijaną wiedzę z zakresu budownictwa w technologii drewnianej.
                </p>
                <a href="https://www.facebook.com/hatek.hatek.902" target="_blank" rel="nofollow noopener noreferrer" class="text-center d-inline-block text-yellow bottom-fb-link">
                    <i class="fa fa-facebook text-green"></i>
                </a>
            </div>
            <div class="col-lg-3 footer-widgets__bottom-desc mb-4 mb-lg-0">
                <h5 class="text-yellow standard-title-7 playfair-petch-font mb-2 mb-lg-4 fw-bold">Kontakt</h5>
                <ul class="list-unstyled p-0 bottom-contact">
                    <li class="mb-3 mb-lg-4 d-flex align-items-center">
                        <i class="fa fa-map-marker me-4 text-yellow"></i>
                        <span>
                            Senator sp. z o. o. <br>
                            09-500 Gostynin<br>
                            ul. Płocka 37,<br>
                            woj. mazowieckie
                        </span>
                    </li>
                    <li class="mb-3 mb-lg-4 d-flex align-items-center">
                        <i class="fa fa-phone me-4 text-yellow"></i>
                        <a href="tel:+48242353645" class="">
                            + 48 24 235 36 45
                        </a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-4 text-yellow"></i>
                        <a href="mailto: biuro@senator.com.pl" class="">
                            biuro@senator.com.pl
                        </a>
                    </li>
                </ul>
            </div>



















            <div class="col-lg-4 footer-widgets__bottom-desc mb-4 mb-lg-0">
                <?php if (is_active_sidebar('menu-about')) : ?>
                    <?php dynamic_sidebar('menu-about'); ?>
                <?php endif; ?>
                <a href="https://www.facebook.com/senator.piotrlewandowski" target="_blank" rel="nofollow noopener noreferrer" class="text-center d-inline-block text-yellow bottom-fb-link">
                    <i class="fa fa-facebook text-orange"></i>
                </a>
            </div>
            <div class="col-lg-4 footer-widgets__bottom-desc mb-4 mb-lg-0">
                <?php if (is_active_sidebar('footer-start')) : ?>
                    <?php dynamic_sidebar('footer-start'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-4">
                <h5 class="text-yellow standard-title-7 playfair-petch-font mb-2 mb-lg-4 fw-bold">Oferta</h5>
                <?php if (is_active_sidebar('menu-services')) : ?>
                    <?php dynamic_sidebar('menu-services'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<div class="copyright-box">
    <div class="container py-4">
        <p class="text-center text-gray-light mb-0"><small>Senator Copyright 2009-2025</small></p>
    </div>
</div>