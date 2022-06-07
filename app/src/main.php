<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="brands">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto text-white h6 fw-400">Only The Highest Quality Materials</div>
            <div class="col">
                <div class="horizontal-line"></div>
            </div>
        </div>
        <div class="brands-slider" id="brands-slider">
            <div><?= renderImg("voltex.png", "logo") ?></div>
            <div><?= renderImg("beacon.png", "logo") ?></div>
            <div><?= renderImg("clipsal.png", "logo") ?></div>
            <div><?= renderImg("hager.png", "logo") ?></div>
            <div><?= renderImg("haneco.png", "logo") ?></div>
            <div><?= renderImg("hpm.png", "logo") ?></div>
            <div><?= renderImg("sal.png", "logo") ?></div>
            <div><?= renderImg("evolt.png", "logo") ?></div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>