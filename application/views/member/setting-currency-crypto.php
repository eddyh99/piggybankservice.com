<div class="wrapper-bg-crypto">
    
    <div class="navbar-app fixed-top d-flex justify-content-center" >
        <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex flex-row justify-content-start align-items-center bottom"
            style="background-color: #121212;">
            <a href="<?= base_url() ?>homepage" class="d-flex align-items-center border-0 ms-0 me-auto">
                <div class="icon-menus d-flex align-items-center home-svg py-0">
                    <img src="<?= base_url() ?>assets/img/piggy-trade-off.png" alt="">
                </div>
            </a>
    
            <a href="<?= base_url() ?>soon" class="d-flex align-items-center border-0 mx-2">
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
                    <div class="mt-4">
                        <div class="is-active-crypto-curr d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <!-- <div class="me-2">
                                    <img src="<?= base_url()?>assets/img/crypto-curr/bitcoin.png" alt="curr">
                                </div> -->
                                <div>
                                    BTC/
                                    <span class="text-secondary">
                                        USDT
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <span class="text-small-settings-curr">Top price 69,221.89</span>
                                <span>
                                    <svg width="85" height="37" viewBox="0 0 85 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_576_7472)">
                                            <path d="M0 28.2982L0.940526 26.3684C1.88105 24.4385 4.11481 18.2655 5.99586 17.5901C7.87691 16.9147 9.75796 16.683 11.639 17.5901C13.5201 18.4972 15.4011 22.63 17.2822 19.9793C19.1632 17.3287 20.6916 17.3368 22.5726 16.761C24.4537 16.1853 26.6874 17.7662 28.5684 18.3108C30.4495 18.8554 32.3306 16.4895 34.2116 16.761C36.0927 17.0326 38.6791 16.9214 40.5602 17.5901C42.4412 18.2588 44.3223 19.4494 46.2034 16.761C48.0844 14.0726 49.2601 13.2877 51.1411 13.6341C53.0222 13.9805 54.9032 17.5648 56.7843 19.4387C58.6653 21.3125 60.5464 20.5622 62.4274 18.3108C64.3085 16.0594 66.1895 10.4584 68.0706 9.7236C69.9516 8.98885 71.8327 11.2719 73.7138 12.3078C75.5948 13.3437 77.4759 13.1326 79.3569 12.2843C81.238 11.4359 83.119 9.95038 84.0595 9.20761L85 8.46484" stroke="#29FF3F" stroke-width="0.708333"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_576_7472">
                                                <rect width="85" height="36" fill="white" transform="translate(0 0.381836)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="text-small-settings-curr">Low price 1.115</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-center crypto-toggle-curr">
                                <input class="form-check-input pill-currency" 
                                    onclick="enablecurrency()"    
                                    type="checkbox" id="euro" checked>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="is-active-crypto-curr d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <!-- <div class="me-2">
                                    <img src="<?= base_url()?>assets/img/crypto-curr/bitcoin.png" alt="curr">
                                </div> -->
                                <div>
                                    BTC/
                                    <span class="text-secondary">
                                        USDT
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <span class="text-small-settings-curr">Top price 69,221.89</span>
                                <span>
                                    <svg width="85" height="37" viewBox="0 0 85 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_576_7472)">
                                            <path d="M0 28.2982L0.940526 26.3684C1.88105 24.4385 4.11481 18.2655 5.99586 17.5901C7.87691 16.9147 9.75796 16.683 11.639 17.5901C13.5201 18.4972 15.4011 22.63 17.2822 19.9793C19.1632 17.3287 20.6916 17.3368 22.5726 16.761C24.4537 16.1853 26.6874 17.7662 28.5684 18.3108C30.4495 18.8554 32.3306 16.4895 34.2116 16.761C36.0927 17.0326 38.6791 16.9214 40.5602 17.5901C42.4412 18.2588 44.3223 19.4494 46.2034 16.761C48.0844 14.0726 49.2601 13.2877 51.1411 13.6341C53.0222 13.9805 54.9032 17.5648 56.7843 19.4387C58.6653 21.3125 60.5464 20.5622 62.4274 18.3108C64.3085 16.0594 66.1895 10.4584 68.0706 9.7236C69.9516 8.98885 71.8327 11.2719 73.7138 12.3078C75.5948 13.3437 77.4759 13.1326 79.3569 12.2843C81.238 11.4359 83.119 9.95038 84.0595 9.20761L85 8.46484" stroke="#29FF3F" stroke-width="0.708333"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_576_7472">
                                                <rect width="85" height="36" fill="white" transform="translate(0 0.381836)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="text-small-settings-curr">Low price 1.115</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-center crypto-toggle-curr">
                                <input class="form-check-input pill-currency" 
                                    onclick="enablecurrency()"    
                                    type="checkbox" id="euro" >
                                    
                            </div>
                        </div>
                    </div>
    
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-12 col-md-7 col-lg-7 settings-currency d-flex">
                            <a href="<?= base_url() ?>crypto" class="btn-toggle-crypto-currency d-flex justify-content-center align-items-center">
                                <span class="text-toggle-crypto-currency f-poppins">NEXT</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>