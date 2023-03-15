<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center">
            <img src="<?= base_url() ?>assets/img/logo-login.png" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul class="px-5">
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto" href="#features">Features</a></li>
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto" href="#services">Services</a></li>
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto" href="#guide">Guide</a></li>
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto" href="<?= base_url(); ?>link/translate">Translate</a></li>
                <li><a class="f-bevietnam nav-link mx-0 my-2 mx-lg-2 my-lg-auto text-center btn-login" href="<?= base_url(); ?>auth/login">Log
                        in</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="top" class="hero pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center slider-freedy text-start">
                <h1 class="f-lexend fw-bold">ALTERNATIVE TO THE BANKING SYSTEM</h1>
                <p class="f-lexend my-3">
                    <b translate="no"> PiggyBank </b> is a multi-currency platform that guarantees the maximum of privacy, and it offers a free <b class="notranslate"> non-custodial wallet </b> with the main functions of a bank account, with an integrated shared <b class="notranslate">order book</b> where you can buy and sell cryptocurrencies with FIAT.
                </p>
                <div class="d-flex flex-wrap mb-3">
                    <div class="list-toright">
                        <ul>
                            <li>Created for companies</li>
                            <li>Useful for travelers</li>
                        </ul>
                    </div>
                    <div class="list-toright">
                        <ul>
                            <li>Great for individuals</li>
                            <li>Perfect for crypto traders</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="powered-top mb-3 me-5">
                        <span>Empowered By</span>
                        <a href="https://tracklessproject.com/">
                            <img src="<?= base_url() ?>assets/img/tracklessprojects-b.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex col-lg-4 hero-img align-items-center">
                <img src="<?= base_url(); ?>assets/img/img-1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center bg-layout-singup my-5 py-5">
                <h2 class="f-lexend m-0">
                    Wallet opening and activation immediate without any limitation
                </h2>
                <div class="text-center">
                    <a href="<?= base_url(); ?>auth/signup_referral" class="btn-slider-signin mt-5 scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Sign up</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= Section ======= -->
    <section id="reward" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-4 d-none d-lg-grid align-items-center text-center">
                    <img src="<?= base_url(); ?>assets/img/img-2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center mb-5 ps-lg-5">
                    <div class="content-freedy p-r">
                        <h2 class="f-lexend">Immediate Opening</h2>
                        <p class="f-lexend">
                            <b translate="no"> PiggyBank </b> is easy and immediately to open, you need to sign
                            up just using an email and password and your account will be immediately active and
                            ready to use without any restriction. <br>
                            (<a href="<?= base_url(); ?>link/service?service=<?= base64_encode('1') ?>" class="text-blue-freedy">No KYC & No
                                AML</a>)
                        </p>
                    </div>
                    <div class="row d-flex justify-content-end my-3">
                        <div class="col-lg-9 p-r">
                            <div class="content-freedy">
                                <h2 class="f-lexend">Free of Charge</h2>
                                <ul class="p-0 f-lexend">
                                    <li><b translate="no"> PiggyBank </b> account opening is free of charge</li>
                                    <li>No monthly or annual fees</li>
                                    <li>Integration to your bussiness without any extra cost</li>
                                    <li>Convert FIAT currencies with zero fees</li>
                                </ul>
                                <div class="text-start">
                                    <a href="<?= base_url(); ?>auth/signup_referral" class="btn-content-freedy d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span class="f-lexend">Sign up</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->


    <!-- ======= Section ======= -->
    <section id="services" class="about bg-layout-singup">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="f-lexend">What makes us different</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex flax-wrap justify-content-center align-items-center">
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-8.png" alt="">
                                <span class="title mt-2 mb-auto"><b translate="no"> Non-custodial wallet </b></span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('8') ?>" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-1.png" alt="">
                                <span class="title mt-2 mb-auto">No KYC & No AML</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('1') ?>" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-2.png" alt="">
                                <span class="title mt-2 mb-auto">Receive funds in 10 FIAT currencies</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('2') ?>" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-3.png" alt="">
                                <span class="title mt-2 mb-auto">Convert, custody & send in over 50 FIAT currencies
                                    worldwide</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('3') ?>" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-4.png" alt="">
                                <span class="title mt-2 mb-auto">Zero exchange fees &
                                    competitive rates for
                                    FIAT to FIAT</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('4') ?>" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-6-1.png" alt="">
                                <span class="title mt-2 mb-auto">Buy & Sell crypto using FIAT</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('5') ?>" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-7.png" alt="">
                                <span class="title mt-2 mb-auto">Clear and transparent prices without hidden costs
                                </span>
                                <a href="<?= base_url(); ?>link/lern_transparency" class="title">Read more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/different-icon-8-1.png" alt="">
                                <span class="title mt-2 mb-auto">API & Plugin</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('6') ?>" class="title">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->


    <!-- ======= Section ======= -->
    <section id="" class="about">
        <div class="container p-r">
            <div class="row gx-0 d-flex justify-content-center">
                <div class="col-lg-6 mb-5 ps-lg-5">
                    <div class="content-freedy">
                        <h2 class="f-lexend">Instant payments between all TracklessProject
                            users of all over the world </h2>
                        <div class="my-3">
                            <p class="f-lexend"><b translate="no">PiggyBank</b>, being part of TracklessProject
                                ecosystem, will be able
                                to instantly send and receive FIAT currencies to all the wallets of the platforms of the
                                ecosystem formed by TracklessBank, TracklessCrypto, TracklessMoney, TracklessChat,
                                sharing  with them the single collection and payment gateway.</p>
                            <p class="fw-semibold">Receive/send/request instant payments using the methode ‘’wallet
                                to wallet’’ </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none d-lg-grid align-items-center text-center">
                    <img src="<?= base_url(); ?>assets/img/img-28.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row gx-0 d-flex justify-content-center mb-5">
                <div class="col-6 d-none d-lg-grid align-items-center text-center">
                    <img src="<?= base_url(); ?>assets/img/img-26.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 mb-5 ps-lg-5">
                    <div class="content-freedy">
                        <h2 class="f-lexend">Revolutionary bank with crypto trading service integrated</h2>
                        <div class="my-3">
                            <ul class="p-0 f-lexend">
                                <li><b translate="no"> Trade off </b> platform</li>
                                <li>Shared <b translate="no"> order book </b></li>
                                <li>Distributed and decentralized</li>
                                <li>Buy crypto from your FIAT balance of your <b translate="no"> PiggyBank </b> wallet
                                </li>
                                <li>Withdraw your earning by bank transfer in more than
                                    50 currencies to any bank account even not under your name</li>
                            </ul>
                        </div>
                        <div class="text-start">
                            <a href="<?= base_url() ?>link/crypto" class="btn-content-freedy d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="f-lexend">Learn more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 d-flex justify-content-center">
                <div class="col-lg-8 mb-5 ps-lg-5">
                    <div class="content-freedy">
                        <h2 class="f-lexend">The first debit card completely anonymous</h2>
                        <div class="my-3">
                            <ul class="p-0 f-lexend">
                                <li>Get your card: Virtual or Physical</li>
                                <li>No limits! The entire account balance is available for card payments and bank
                                    transfers
                                </li>
                                <li>Pay and withdraw anonymously</li>
                                <li>Use it on ApplePay, GooglePay & others</li>
                            </ul>
                        </div>
                        <div class="text-start">
                            <a href="<?= base_url(); ?>auth/signup_referral" class="btn-content-freedy d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="f-lexend">Sign up</span>
                            </a>
                        </div>
                        <div class="col-4 d-none d-lg-grid align-items-center text-center">
                        <img src="<?= base_url(); ?>assets/img/img-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-freedy p-r text-center">
                <div class="my-3">
                    <h2 class="f-lexend d-block">BECOME OUR PARTNER</h2>
                    <div class="col-4 d-none d-lg-grid align-items-center text-center">
                        <img src="<?= base_url(); ?>assets/img/bg.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                        <p class="col-lg-12 text-center content-freedy f-lexend card-text"> Become an affiliate partner of ours and create your point or open a Tracklessproject corner at your shop to make top-ups and withdrawals to all TracklessBank TracklessCrypto and TracklessMoney users, from all over the world.</p>
                        <p class="content-freedy f-lexend card-text"> It doesn't matter the country you are in, the users of the system are all over the world!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-5">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="form-contactus py-2 w-50">
                            <form id="form_submit" method="POST" action="http://localhost/piggybankservice.com/link/send_message" class="w-100 d-flex flex-row justify-content-center align-items-center" onsubmit="return validate()">
                                <input type="hidden" id="token" name="csrf_freedy" value="cc35aaaddbc9b79f2144086c6d7e2992">
                                <input name="email" type="text" placeholder="Enter your email address" class="col f-roboto">
                                    <button class="mx-3 py-2 btn-contactus border-0" type="submit" id="btnconfirm">
                                        <span class="mx-3 d-none d-sm-grid">Contact us</span>
                                        <img src="<?= base_url(); ?>assets/img/arrow-contactus.png" alt="" class="mx-1">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="guide" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="f-lexend m-plus-5 d-block"><b translate="no"> PiggyBank </b> user guide</h2>
                    </div>
                    <div class="col-12 my-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12">
                                <div class="row d-flex justify-content-around">
                                    <div class="col-10 col-md-5 col-lg-3 p-0">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 m-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-5.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Essential for your trips</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('4') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 col-md-5 col-lg-3 p-0 m-min-5">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 m-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-8.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Wallet</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('8') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 col-md-5 col-lg-3 p-0">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 m-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-7.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Crypto trading</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('7') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 d-grid align-items-center">
                                <div class="row d-flex justify-content-around">
                                    <div class="col-10 col-lg-12 px-0">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 me-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-1.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Capital Exportation</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('1') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-none text-center d-lg-grid align-items-center">
                                <img src="<?= base_url() ?>assets/img/img-4-4.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 d-grid align-items-center">
                                <div class="row d-flex justify-content-around">
                                    <div class="col-10 col-lg-12 px-0">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap ">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 ms-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-4.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Daily use</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('2') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row d-flex justify-content-around">
                                    <div class="col-10 col-md-5 col-lg-3 p-0 m-min-5">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 m-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-3.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Find me</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('5') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 col-md-5 col-lg-3 p-0 mt-lg-5">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 m-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-6.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Search</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('6') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 col-md-5 col-lg-3 p-0 m-min-5">
                                        <div class="service-freedy text-center d-flex align-items-center flex-wrap">
                                            <div class="col-12 d-flex flex-column align-items-center my-3 my-md-4 box-service px-5 py-4 m-auto">
                                                <img src="<?= base_url(); ?>assets/img/untilities-2.png" alt="" class="my-auto">
                                                <h4 class="f-lexend my-auto">Collections and Payments</h4>
                                                <a class="f-lexend" href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('3') ?>">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="" class="about">
        <div class="container p-r">
            <div class="row gx-0 d-flex justify-content-center">
                <div class="col-12 my-5 d-flex justify-content-center">
                    <div class="reward p-3 p-md-5">
                        <div class="row">
                            <div class="col-12 col-md-8 p-3">
                                <h2>Get Rewards</h2>
                                <p>
                                    With the use of your referral link you are rewarded for every FIAT or crypto
                                    operation carried out by those who signed up using your link.
                                </p>
                                <span class="shareit d-block mb-4">Share it !</span>
                                <a href="<?= base_url() ?>link/lern_reward" class="readmore px-3 py-2">Read more</a>
                            </div>
                            <div class="col-4 d-none d-md-grid align-items-center">
                                <img src="<?= base_url() ?>assets/img/img-5.png" alt="" class="img-fluid roundend">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="features" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="f-lexend">Features</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 features-freedy">
                            <div class="features-freedy text-center d-flex align-items-center justify-content-center flex-wrap">
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-1.png" alt="">
                                        <h4 class="f-lexend mb-auto mt-3">100% Secure</h4>
                                        <a class="f-lexend" href="<?= base_url(); ?>link/features?features=<?= base64_encode('1') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-3.png" alt="">
                                        <h4 class="f-lexend mb-auto mt-3">Technology</h4>
                                        <a class="f-lexend" href="<?= base_url(); ?>link/features?features=<?= base64_encode('3') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-4.png" alt="">
                                        <h4 class="f-lexend mb-auto mt-3">Mission</h4>
                                        <a class="f-lexend" href="<?= base_url(); ?>link/features?features=<?= base64_encode('4') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="contactus" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="box-contactus px-3 py-5">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <img src="<?= base_url() ?>assets/img/sendmail.png" alt="" class="mx-auto d-none d-md-grid">
                            <div class="form-contactus py-2 mx-auto">
                                <form id="form_submit" method="POST" action="<?= base_url(); ?>link/send_message" class="d-flex flex-row justify-content-center align-items-center" onsubmit="return validate()">
                                    <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <input name="email" type="text" placeholder="Enter your email address" class="ms-4">
                                    <button class="mx-3 py-2 btn-contactus" type="submit" id="btnconfirm">
                                        <span class="mx-3 d-none d-sm-grid">Contact us</span>
                                        <img src="<?= base_url() ?>assets/img/arrow-contactus.png" alt="" class="mx-1">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="contact" class="footer p-0 p-r">
    <div class="pt-5">
        <div class="container py-5">
            <div class="row gy-4">
                <div class="col-lg-3 col-12 pe-2 footer-links text-lg-center">
                    <h4 class="f-lexend">Contact us</h4>
                    <div class="row list box-list-sosmed p-3">
                        <a href="#" class="col-auto col-lg-6 p-1 p-lg-3 ms-lg-auto">
                            <span class="icon mx-lg-auto"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a href="#" class="col-auto col-lg-6 p-1 p-lg-3">
                            <span class="icon mx-lg-auto"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a href="#" class="col-auto col-lg-6 p-1 p-lg-3">
                            <span class="icon mx-lg-auto"><i class="fab fa-instagram"></i></span>
                        </a>
                        <a href="#" class="col-auto col-lg-6 p-1 p-lg-3 me-lg-auto">
                            <span class="icon mx-lg-auto"><i class="fab fa-linkedin"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 pe-2 footer-links text-lg-center d-flex flex-column">
                    <div class="row">
                        <div class="col-12 col-lg my-3">
                            <a href="<?= base_url(); ?>link/privacy_policy" style="color:#fff;">Privacy policy</a>
                        </div>
                        <div class="col-12 col-lg my-3">
                            <a href="<?= base_url(); ?>link/lern_transparency" style="color:#fff;">Price lists</a>
                        </div>
                        <div class="col-12 col-lg my-3">
                            <a href="<?= base_url(); ?>link/about" style="color:#fff;">About <b translate="no">
                                    PiggyBank
                                </b></a>
                        </div>
                    </div>
                    <div class="credits footer-info f-lexend d-none d-lg-grid my-auto">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <span class="f-lexend me-2 text-white">Empowered by</span>
                            <a href="https://tracklessproject.com/">
                                <img src="<?= base_url() ?>assets/img/tracklessprojects.png" alt="" class="tracklessbank">
                            </a>
                        </div>
                        <p>
                            <b translate="no"> PiggyBank </b> (USA) is a service subject to partnership with licensee
                            PBS
                            On
                            line LLC
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12 pe-2 footer-links text-lg-center d-lg-flex justify-content-center align-items-center">
                    <a class="logo-footer">
                        <img src="<?= base_url() ?>assets/img/logo-bgcircle.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-4 d-lg-none" style="z-index: 99; position: relative;">
            <div class="credits footer-info f-lexend">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <span class="f-lexend me-2 text-white">Empowered by</span>
                    <a href="https://tracklessproject.com/">
                        <img src="<?= base_url() ?>assets/img/tracklessprojects.png" alt="" class="tracklessbank">
                    </a>
                </div>
                <p>
                    <b translate="no"> PiggyBank </b> (USA) is a service subject to partnership with licenses
                    PBS
                    On
                    line LLC
                </p>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#top" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php if (@isset($_SESSION["success"])) { ?>
    <div class="alert alert-success alert-dismissible" id="success-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
        <?= $_SESSION["success"]; ?>
    </div>
<?php } ?>

<?php if (@isset($_SESSION["failed"])) { ?>
    <div class="alert alert-danger alert-dismissible" id="danger-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
        <?= $_SESSION["failed"]; ?>
    </div>
<?php } ?>