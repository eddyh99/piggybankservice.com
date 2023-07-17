<div class="wrapper-bg-crypto">
    <div class="navbar-app fixed-top d-flex justify-content-center" >
        <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex flex-row justify-content-start align-items-center bottom"
            style="background-color: #121212;">
            <a href="<?= base_url() ?>crypto" class="d-flex align-items-center border-0 ms-0 me-auto">
                <div class="icon-menus d-flex align-items-center home-svg py-0">
                    <img src="<?= base_url() ?>assets/img/piggy-trade-off.png" alt="">
                </div>
            </a>
    
            <a href="<?= base_url() ?>search" class="d-flex align-items-center border-0 mx-2">
                <div class="icon-menus d-flex align-items-center home-svg py-0">
                    <img src="<?= base_url() ?>assets/img/icon-search.png" alt="">
                </div>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="container" style="margin-bottom: 8rem;">
                <div class="app-container py-5" style="margin-top: 5rem;">
                    <div class="row d-flex justify-content-center">
                        <div class="text-white">
                            <a href="<?= base_url()?>crypto">
                                <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_576_7519)">
                                        <rect x="0.359375" y="0.166016" width="57" height="57" rx="28.5" fill="white"/>
                                    </g>
                                    <g clip-path="url(#clip0_576_7519)">
                                        <path d="M32.9313 40.8802L20.717 29.6837L32.9313 18.4873" stroke="#1B8036" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_576_7519" x="0.359375" y="0.166016" width="65" height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dx="4" dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_576_7519"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_576_7519" result="shape"/>
                                        </filter>
                                        <clipPath id="clip0_576_7519">
                                            <rect width="24.4286" height="24.4286" fill="white" transform="translate(15.6272 17.4697)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-white">
                            <h2 class="text-center">Confirmation</h2>
                            <h4 class="text-center">You Convert</h4>
                            <h4 class="text-center fw-bold text-success">EUR 10</h4>
                        </div>
                    </div>
                    <form action="">

                        <div class="row mt-5">
                            <h4 class="text-white">You receive</h4>
                            <div class="topup-input-card d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-medium">USDX</label>
                                </span>
                                <input type="text" class="form-control money-input text-end" name="receive"
                                    id="receive" placeholder="0.00" value="100" >
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="topup-input-card one d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-sm-medium">From</label>
                                </span>
                                <input type="text" class="form-control text-end" name="receive"
                                    id="receive" placeholder="0.00" value="EUR 100" readonly>
                            </div>
                            <div class="topup-input-card two d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-small">To</label>
                                </span>
                                <input type="text" class="form-control text-end" name="receive"
                                    id="receive" placeholder="0.00" value="USDX 2000" readonly>
                            </div>
                            <div class="topup-input-card three d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-small">Transaction fees</label>
                                </span>
                                <input type="text" class="form-control text-end" name="receive"
                                    id="receive" placeholder="0.00" value="EUR 12" readonly>
                            </div>
                            <div class="topup-input-card four d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-small">Total</label>
                                </span>
                                <input type="text" class="form-control text-end" name="receive"
                                    id="receive" placeholder="0.00" value="EUR 2000" readonly>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-12 col-md-7 col-lg-7 settings-currency d-flex">
                                <a href="<?= base_url() ?>crypto/notification" class="btn-toggle-crypto-currency d-flex justify-content-center align-items-center">
                                    <span class="text-toggle-crypto-currency f-poppins">Confirm</span>
                                </a>
                            </div>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>

</div>