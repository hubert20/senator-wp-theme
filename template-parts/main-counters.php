<?php
$form_bg = get_field('form_bg');
$form_cnt = get_field('form_cnt');
?>

<!-- Contact Form -->
<section class="form-banner py-4 py-lg-5" id="form-banner" style="background-image: url('<?php echo $form_bg; ?>');">
    <div class="container mb-4 mb-lg-5">
        <?php echo $form_cnt; ?>
    </div>
    <!-- Counters -->
    <div class="counter-main-box py-4 py-lg-5 bg-white" id="counter">
        <h2 class="subtitle chakra-petch-font text-center standard-title-4 fw-bolder mb-3 mb-lg-5 position-relative" style="z-index: 0;">
            Czemu zaufać właśnie nam?
        </h2>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/naprawa-alternatorow.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="6000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Naprawionych alternatorów</p>
            </div>
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/naprawa-rozrusznikow.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="7000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Naprawionych rozruszników</p>
            </div>
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/klimatyzacja-naprawa-i-serwis.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="8000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Naprawionych układów klimatyzacji</p>
            </div>
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/zadowoleni-klienci.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="9000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Zadowolonych klientów</p>
            </div>
        </div>
    </div>
</section>