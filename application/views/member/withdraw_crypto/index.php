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
                            <h4 class="text-center">Withdraw USDX</h4>
                            <p class="text-center">Convert any amount of USDX into your favorite FIAT currencies. The FIAT balance will be immediatley avaible into your FIAT wallet</p>
                            <h2 class="text-center fw-bold">USDX balance : 0.00</h2>
                        </div>
                    </div>

                    <form action="">
                        <div class="row mt-5">
                            <h4 class="text-white">Amount of Exchange</h4>
                            <div class="topup-input-card d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-medium">EUR</label>
                                </span>
                                <input type="text" class="form-control money-input text-end" name="receive"
                                    id="receive" placeholder="0.00" >
                            </div>
                        </div>

                        <div class="row mt-5">
                            <h4 class="text-white">Withdraw to</h4>
                            <div class="topup-input-card d-flex justify-content-between">
                                <div class="d-flex align-items-center ms-3">
                                    <div>
                                        <span class="text-secondary">
                                            from
                                        </span>
                                        <br>
                                        <span class="text-crypto-topup-medium">
                                            EUR
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <!-- <div class="d-flex flex-column justify-content-center">
                                        <span class="text-secondary">
                                            your balance
                                        </span>
                                        <span class="d-flex justify-content-start text-crypto-topup-medium">
                                            10000
                                        </span>
                                    </div> -->
                                    <div class="mx-5 d-flex align-items-center topup-arrow-currency-change" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg width="35" height="18" viewBox="0 0 35 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.6925 17.6152C16.2977 17.6152 14.9029 17.0773 13.8469 16.0212L0.855497 3.02984C0.27766 2.45201 0.27766 1.49559 0.855497 0.917752C1.43333 0.339916 2.38975 0.339916 2.96759 0.917752L15.9589 13.9091C16.9154 14.8655 18.4695 14.8655 19.426 13.9091L32.4173 0.917752C32.9952 0.339916 33.9516 0.339916 34.5294 0.917752C35.1073 1.49559 35.1073 2.45201 34.5294 3.02984L21.5381 16.0212C20.482 17.0773 19.0872 17.6152 17.6925 17.6152Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <h4 class="text-white">You receive</h4>
                            <div class="topup-input-card d-flex justify-content-between">
                                <span class="d-flex align-items-center ms-3">
                                    <label  for="" class="text-crypto-topup-medium">USDX</label>
                                </span>
                                <input type="text" class="form-control money-input text-end" name="receive"
                                    id="receive" placeholder="0.00" value="2000" readonly>
                            </div>
                        </div>


                    </form>
    
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-12 col-md-7 col-lg-7 settings-currency d-flex">
                            <a href="<?= base_url() ?>withdraw_crypto/confirm_withdraw" class="btn-toggle-crypto-currency d-flex justify-content-center align-items-center">
                                <span class="text-toggle-crypto-currency f-poppins">Withdraw</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade crypto" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content crypto-modal">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Select which currency you want to exchange to USDX </h1>
        <!-- <button type="button" class="btn-close crypto-modal" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
            <div class="row my-2">
                <div class="topup-input-card crypto-modal d-flex justify-content-center">
                    <span class="d-flex justify-content-center align-items-center ms-3">
                        <label  for="" class="text-crypto-topup-sm-medium">USD</label>
                    </span>
                    <!-- <input type="text" class="form-control text-end" name="receive"
                        id="receive" placeholder="0.00" value="Your Balance : 2000 USD" readonly> -->
                </div>
            </div>
            <div class="row my-2">
                <div class="topup-input-card crypto-modal d-flex justify-content-center">
                    <span class="d-flex align-items-center ms-3">
                        <label  for="" class="text-crypto-topup-sm-medium">EUR</label>
                    </span>
                    <!-- <input type="text" class="form-control text-end" name="receive"
                        id="receive" placeholder="0.00" value="Your Balance : 2000 USD" readonly> -->
                </div>
            </div>
      </div>
    </div>
  </div>
</div>