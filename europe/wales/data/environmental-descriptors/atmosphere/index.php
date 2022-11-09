<?php $activepage = "";
include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

    <!-- country-subpage-banner-section-start -->
    <div class="row country_subpage-main-section mb-80 mx-0">
        <div class="col-md-5 country_subpage-background-color m-0 p-0">
            <div class="mx-md-5 d-flex flex-column h-100 main-content">
            </div>
        </div>
        <div class="col-md-7 m-0 p-0 position-relative">
            <div class="country_subpage-img-layer"></div>
            <img class="country_subpage-benner-img" src="/assets/img/Wales/big/atmosphere.jpg" alt="Atmosphere">
        </div>
        <div class="dsc-about-page container">
            <div class="row text-white">
                <div class="col-12">
                    <?php
                    //breadcrumbs
                    include($_SERVER['DOCUMENT_ROOT'] . '/inc/breadcrumbs.php');
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="dsc-about-inner col-12 col-md-5">
                    <h3 class="mb-3 mb-md-4 text-uppercase">Atmosphere</h3>
                </div>
            </div>
            <div class="country-subpage-welcome-living-button d-flex justify-content-xs-center justify-content-md-start mt-3">
                <button type="button" class="country-subpage-search">Contact Us</button>
                <button type="button" class="country-subpage-get-in-touch">Contribute</button>
            </div>
        </div>
    </div>
    <!-- country-subpage-banner-section-end -->

    <!-- country-subpage-blog-start -->
    <div class="container mt-80 mb-80 future-landscapes-main">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="data-item">
                    <a href="./air-pollutants"><img src="/assets/img/Wales/air-polutants.jpg" alt="Air Pollutants"></a>
                    <div class="data-heading">
                        <h4><a href="./air-pollutants">Air Pollutants</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="data-item">
                    <a href="./climate-variables"><img src="/assets/img/Wales/variants.jpg" alt="Climate Variables"></a>
                    <div class="data-heading">
                        <h4><a href="./climate-variables">Climate Variables</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- country-subpage-blog-end -->

    <!-- get-in-section-Start -->
    <div class="container mb-100">
        <div class="get-in-section-main">
            <div class="get-in-section-dsc">
                <h3>We need your help...</h3>
                <p>Find out how you contribute to the website by joining our community and helping the Living Earth Hub grow.</p>
            </div>
            <button type="button"><a href="/contact.php">Get in touch</a></button>
        </div>
    </div>
    <!-- get-in-section-End -->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
