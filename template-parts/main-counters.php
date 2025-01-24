<?php
$form_bg = get_field('form_bg');
$form_cnt = get_field('form_cnt');
$count_cnt = get_field('licznik_cnt');
?>
<!-- Contact Form -->
<section class="form-banner py-4 py-lg-5" id="form-banner" style="background-image: url('<?php echo $form_bg; ?>');">
    <div class="container mb-4 mb-lg-5">
        <?php echo $form_cnt; ?>
    </div>
    <!-- Counters -->
    <?php echo $count_cnt; ?>
    <!-- <div class="counter-main-box py-4 py-lg-5 bg-white" id="counter">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/naprawa-alternatorow.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="12000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Wyprodukowanych szaf przesuwnych</p>
            </div>
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/naprawa-rozrusznikow.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="20">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Lat w branży</p>
            </div>
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/klimatyzacja-naprawa-i-serwis.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="20000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Sprzedanych egzemplarzy</p>
            </div>
            <div class="col-lg-3">
                <div class="position-relative counter-number--box">
                    <img src="/wp-content/uploads/2024/09/zadowoleni-klienci.png" class="img-fluid counter-number--icon" alt="">
                    <p class="count counter-number counter-number--plus standard-title-3 chakra-petch-font fw-bold" data-count="9000">0</p>
                </div>
                <p class="text-uppercase fw-bold counter-main-box--titles lh-13">Zadowolonych klientów</p>
            </div>
        </div>
    </div> -->
</section>