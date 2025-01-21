<!-- Footer -->
<section class="footer-widgets">
    <div class="container py-4 py-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 footer-widgets__bottom-desc mb-4 mb-lg-0">
                <?php if (is_active_sidebar('menu-about')) : ?>
                    <?php dynamic_sidebar('menu-about'); ?>
                <?php endif; ?>
                <a href="https://www.facebook.com/senator.piotrlewandowski" target="_blank" rel="nofollow noopener noreferrer" class="text-center d-inline-block text-orange bottom-fb-link">
                    <i class="fa fa-facebook text-orange"></i>
                </a>
            </div>
            <div class="col-lg-4 footer-widgets__bottom-desc mb-4 mb-lg-0">
                <?php if (is_active_sidebar('footer-start')) : ?>
                    <?php dynamic_sidebar('footer-start'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-4">
                <h5 class="text-orange standard-title-7 chakra-petch-font mb-2 mb-lg-4 fw-bold text-uppercase">Oferta</h5>
                <?php if (is_active_sidebar('menu-services')) : ?>
                    <?php dynamic_sidebar('menu-services'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <img src="/wp-content/uploads/2024/09/cropped-senator-favicon-gotowe.png" class="footer-widgets__background">
</section>
<div class="copyright-box">
    <div class="container py-4">
        <p class="text-center text-gray-light mb-0"><small>Senator Copyright 2009-2024</small></p>
    </div>
</div>