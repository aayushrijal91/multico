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

<section class="about">
    <div class="container-fluid px-0">
        <div class="row no-gutters align-items-end">
            <div class="col-6">
                <?= renderImg("about.png", "background", "about-img") ?>
            </div>
            <div class="col-5">
                <div class="about-content">
                    <div class="fw-700 h3 text-white letter-spacing-n1">As Premier Electrical Contractors, we are committed to delivering customer service that is second to none.</div>
                    <div class="h15 description">
                        <p class="text-grey">We have had numerous jobs that require in-home rewiring, hazardous cabling is still very much present in the older homes of Sydney so if you haven’t had your home inspected for potential VIR/Hazardous non-compliant cabling feel free to reach out.</p>
                        <p class="fw-900 text-white">When working on a renovation whether it is large or small, we will treat it like it's our own home and ensure we always put our best foot forward. Cleaning up is always part of our job and we never leave a mess behind.</p>
                        <p class="text-grey">We work together with our clients and builders to ensure your job is completed to the highest standard and is 100% compliant. We are property management and strata specialist electricians who understand the guidelines and regulations to work within in the industry. Multi Co will ensure that you get the best tailored service for your electrical needs.</p>
                    </div>
                    <a href="#form" class="btn btn-about btn-primary h9">
                        <span class="pr-3">Contact Us</span> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>