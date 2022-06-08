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
            <div class="col-xl-6">
                <?= renderImg("about.png", "background", "about-img") ?>
            </div>
            <div class="col-xl-6 col-xxl-5">
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

<section class="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-xxl-10 fw-600 h4 text-white text-center">We offer a wide range of services to meet your residential and commercial electrical needs. <span class="fw-900">Big job or small, we have you covered.</span></div>
            <div class="col-xl-10 col-xxl-9 text-white h10 text-center line-height-2 fw-400 py-5">
                <span class="fw-700 text-primary">Multi Co Electrical aims to raise the standards in the trade service industry.</span> Time & time again we have heard complaints of unreliable trades, lack of communication & no care factor to what clients need. <span class="fw-900">We <u>will</u> ensure</span> you have a memorable experience each & every time.
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <?= renderImg("switchboard-installation.jpg", "lib", "w-100") ?>
                    <div class="title">Switchboard Installations &amp; Upgrades</div>
                    <div class="buttons">
                        <div class="row no-gutters">
                            <div class="col-6 border-right">
                                <a href="#form" class="btn btn-block text-black h12 fw-700 line-height-1 py-4">Find Out More</a>
                            </div>
                            <div class="col-6">
                                <a href="./" class="btn btn-block text-primary h12 fw-900 line-height-1 py-4">Require Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <?= renderImg("led-lighting.jpg", "lib", "w-100") ?>
                    <div class="title">LED Lighting Upgrades &amp; Installation</div>
                    <div class="buttons">
                        <div class="row no-gutters">
                            <div class="col-6 border-right">
                                <a href="#form" class="btn btn-block text-black h12 fw-700 line-height-1 py-4">Find Out More</a>
                            </div>
                            <div class="col-6">
                                <a href="./" class="btn btn-block text-primary h12 fw-900 line-height-1 py-4">Require Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <?= renderImg("smoke-alarms.jpg", "lib", "w-100") ?>
                    <div class="title">Smoke Alarms</div>
                    <div class="buttons">
                        <div class="row no-gutters">
                            <div class="col-6 border-right">
                                <a href="#form" class="btn btn-block text-black h12 fw-700 line-height-1 py-4">Find Out More</a>
                            </div>
                            <div class="col-6">
                                <a href="./" class="btn btn-block text-primary h12 fw-900 line-height-1 py-4">Require Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <?= renderImg("electric-vehicle-charging-stations.jpg", "lib", "w-100") ?>
                    <div class="title">Electric Vehicle Charging Stations</div>
                    <div class="buttons">
                        <div class="row no-gutters">
                            <div class="col-6 border-right">
                                <a href="#form" class="btn btn-block text-black h12 fw-700 line-height-1 py-4">Find Out More</a>
                            </div>
                            <div class="col-6">
                                <a href="./" class="btn btn-block text-primary h12 fw-900 line-height-1 py-4">Require Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <?= renderImg("house-rewiring.jpg", "lib", "w-100") ?>
                    <div class="title">House Lighting Installation &amp; Repair</div>
                    <div class="buttons">
                        <div class="row no-gutters">
                            <div class="col-6 border-right">
                                <a href="#form" class="btn btn-block text-black h12 fw-700 line-height-1 py-4">Find Out More</a>
                            </div>
                            <div class="col-6">
                                <a href="./" class="btn btn-block text-primary h12 fw-900 line-height-1 py-4">Require Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <?= renderImg("house-lighting.jpg", "lib", "w-100") ?>
                    <div class="title">Home Lighting Installation &amp; Repair</div>
                    <div class="buttons">
                        <div class="row no-gutters">
                            <div class="col-6 border-right">
                                <a href="#form" class="btn btn-block text-black h12 fw-700 line-height-1 py-4">Find Out More</a>
                            </div>
                            <div class="col-6">
                                <a href="./" class="btn btn-block text-primary h12 fw-900 line-height-1 py-4">Require Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-4 py-3 py-xl-0">
                    <div class="cta-card">
                        <div class="h5 fw-700">Customer Satisfaction Guaranteed</div>
                        <div class="fw-500 h15 pt-3">We work around your busy schedule & consult with you on all aspects of your project</div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 py-3 py-xl-0">
                    <div class="cta-card">
                        <div class="h5 fw-700">We strive to be Honest, Reliable &amp; Transparent.</div>
                        <div class="fw-500 h15 pt-3">When it comes to our service to ensure you get the best possible product.</div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 py-3 py-xl-0">
                    <div class="cta-card">
                        <div class="h5 fw-700 text-center line-height-1">We Care About the Details.</div>
                        <div class="fw-500 h15 pt-3">Big job or small, we have you covered.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="form-wrapper">
            <div class="bg-primary btn rounded-0 h19 fw-600">Book Online</div>
            <div class="fw-700 h2 text-black py-3 py-lg-2">Book now & receive a <span class="fw-900">free electrical safety inspection</span> valued at $200</div>
            <form action="./src/form" method="POST" class="pt-2">
                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                <div class="row no-gutters pb-3">
                    <div class="col-12 col-md-6 pr-md-4">
                        <label for="name">Your Full Name</label>
                        <input id="name" class="form-control border-1 rounded-0 bg-white" type="text" placeholder="Eg: John" name="name" required>
                    </div>
                    <div class="col-12 col-md-6 pl-md-4 mt-3 mt-md-0">
                        <label for="phone">Your Contact Number</label>
                        <input id="phone" class="form-control rounded-0 bg-white" type="tel" placeholder="Eg: 0400 000 000" name="phone" required>
                    </div>
                    <div class="col-12 col-md-6 pr-md-4 mt-3 mt-md-4">
                        <label for="email">Your Email Address</label>
                        <input id="email" class="form-control rounded-0 bg-white" type="email" placeholder="Eg: example@email.com.au" name="email" required>
                    </div>
                    <div class="col-12 col-md-6 pl-md-4 mt-3 mt-md-4">
                        <label for="date">Preferred Date</label>
                        <input id="date" class="form-control rounded-0 bg-white" type="date" placeholder="Eg: example@email.com.au" name="date" required>
                    </div>
                    <div class="col-12 mt-3 mt-md-4">
                        <label for="service">Service Required</label>
                        <select name="service" class="form-control rounded-0 bg-white" required>
                            <option value="" disabled selected>Choose an option</option>
                            <option>Curtains</option>
                            <option>Outdoor Roller Blinds</option>
                            <option>Vertical Blinds</option>
                            <option>Roller Blinds</option>
                            <option>Panel Glides</option>
                            <option>Roman Blinds</option>
                            <option>Venetian Blinds</option>
                            <option>Veri Shades</option>
                            <option>Plantation Shutters</option>
                            <option>Zebra Blinds</option>
                            <option>Motorised Blinds</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center pt-md-3">
                    <div class="col-auto">
                        <svg width="30" height="35" viewBox="0 0 30 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.272 12.4193C17.272 11.7064 16.9963 11.0226 16.5055 10.5185C16.0147 10.0143 15.3491 9.73113 14.655 9.73113C13.9609 9.73113 13.2953 10.0143 12.8045 10.5185C12.3137 11.0226 12.038 11.7064 12.038 12.4193V15.6452H17.272V12.4193Z" fill="black" />
                            <path d="M27.5621 2.77189L15.0005 0.62132C14.7717 0.582607 14.5383 0.582607 14.3096 0.62132L1.74792 2.77189C1.25944 2.85583 0.815753 3.11494 0.495686 3.50317C0.175618 3.8914 -9.87436e-05 4.38361 -0.000244141 4.89235V19.9463C-0.000244141 23.9389 1.54379 27.7679 4.29218 30.5911C7.04058 33.4143 10.7682 35.0003 14.655 35.0003C18.5418 35.0003 22.2695 33.4143 25.0179 30.5911C27.7663 27.7679 29.3103 23.9389 29.3103 19.9463V4.89235C29.3101 4.38361 29.1344 3.8914 28.8144 3.50317C28.4943 3.11494 28.0506 2.85583 27.5621 2.77189ZM23.0295 24.2475C23.0295 24.8178 22.8089 25.3648 22.4163 25.7681C22.0236 26.1715 21.4911 26.398 20.9358 26.398H8.37419C7.81893 26.398 7.28642 26.1715 6.89379 25.7681C6.50116 25.3648 6.28058 24.8178 6.28058 24.2475V17.7958C6.28058 17.2254 6.50116 16.6784 6.89379 16.2751C7.28642 15.8718 7.81893 15.6452 8.37419 15.6452H8.8976V12.4193C8.8976 10.8508 9.50418 9.34657 10.5839 8.23746C11.6636 7.12836 13.1281 6.50527 14.655 6.50527C16.182 6.50527 17.6464 7.12836 18.7261 8.23746C19.8059 9.34657 20.4124 10.8508 20.4124 12.4193V15.6452H20.9358C21.4911 15.6452 22.0236 15.8718 22.4163 16.2751C22.8089 16.6784 23.0295 17.2254 23.0295 17.7958V24.2475Z" fill="black" />
                        </svg>

                    </div>
                    <div class="col col-lg-4 pt-3 pb-4 py-lg-0">
                        <div class="h16 fw-800 text-black">Your privacy is our priority.</div>
                        <div class="text-black h17 fw-500">All information will be kept 100% private
                            &amp; secure
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row no-gutters">
                            <div class="col-6 px-md-3">
                                <button type="submit" class="btn btn-primary text-black form-control rounded-0 h19 fw-800">
                                    Submit
                                </button>
                            </div>
                            <div class="col-6 px-md-3">
                                <a href="tel: <?= $phone_number ?>" class="btn btn-black text-white form-control rounded-0 h19 fw-800 d-flex align-items-center justify-content-center">
                                    Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>