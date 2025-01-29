<?php
$form_bg = get_field('form_bg');
$form_cnt = get_field('form_cnt');
$count_cnt = get_field('licznik_cnt');
?>
<!-- Contact Form -->
<section class="form-banner py-4 py-lg-5" id="form-banner" style="background-image: url('<?php echo $form_bg; ?>');">
    <div class="container mb-4 mb-lg-5">
        <?php echo $form_cnt; ?>
        <?php echo $count_cnt; ?>
    </div>
</section>