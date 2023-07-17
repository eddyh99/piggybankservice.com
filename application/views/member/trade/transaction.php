<?php if($transaction == 'sell') {?>
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
    
                        <div class="row mb-4">
                            <div class="col-12 text-white">
                                <h2 class="text-center fw-bold">Trade</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="trade-menu">
                                    <div class="trade-menu-top d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <img src="<?= base_url()?>assets/img/crypto-curr/bitcoin.png" alt="curr">
                                            </div>
                                            <div>
                                                <span class="trade-menu-text-white">
                                                    Bitcoin
                                                </span>
                                                <br>
                                                <span class="trade-menu-text-gray">
                                                    BTC
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="trade-menu-text-gray">
                                                Bitcoin balance
                                            </span>
                                            <br>
                                            <span class="d-flex justify-content-end trade-menu-text-white">
                                                3,5 BTC
                                            </span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
    
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="balance-transaction text-white p-3 d-flex flex-column justify-content-center align-items-center">
                                    <span>USDX Balance</span>
                                    <h3>USDX 100</h3>
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-4">
                            <div class="d-flex justify-content-center btn-transaction-buy-sell">
                                <a href="<?= base_url(); ?>trade/transaction?transaction=<?= base64_encode('buy') ?>" class="d-block d-flex justify-content-center align-items-center">Buy</a>   
                                <a href="<?= base_url(); ?>trade/transaction?transaction=<?= base64_encode('sell') ?>" class="d-block d-flex justify-content-center align-items-center activesell">Sell</a>   
                            </div>
                        </div>
    
                        <div class="mt-4">
                            <a href="<?= base_url()?>trade">
                                <div class="balance-during-transaction d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="<?= base_url()?>assets/img/crypto-curr/bitcoin.png" alt="curr">
                                        </div>
                                        <div>
                                            Bitcoin
                                            <br>
                                            <span>
                                                BTC
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <span>
                                            $1231213123
                                        </span>
                                        <br>
                                        <span class="d-flex justify-content-end text-success">
                                            +12%
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
    
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-limit-transaction w-100 py-3">Limit</button>
                                <div class="input-transaction d-flex justify-content-between mt-4">
                                    <input type="text" class="form-control money-input" name="price"
                                    id="price" placeholder="Price" >
                                    <span class="d-flex align-items-center me-3">
                                        USDX
                                    </span>
                                </div>
                                <div class="input-transaction d-flex justify-content-between mt-4">
                                    <input type="text" class="form-control money-input" name="amount"
                                    id="amount" placeholder="Amount" >
                                    <span class="d-flex align-items-center me-3">
                                        BTC
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between percen-after-transaction mt-3">
                                    <div>25%</div>
                                    <div>25%</div>
                                    <div>25%</div>
                                    <div>25%</div>
                                </div>
                                <div class="input-transaction d-flex justify-content-between mt-4">
                                    <input type="text" class="form-control money-input" name="resultamount"
                                    id="resultamount" placeholder="Amount" value="430122">
                                    <span class="d-flex align-items-center me-3">
                                        USDX
                                    </span>
                                </div>
                                <a href="" class="btn btn-danger w-100 d-block py-3 mt-4">Sell BTC</a>
                            </div>
                            <div class="col-6 mt-4">
                                <p class="text-secondary text-center fw-semibold">Current orders</p>
                                <div class="row">
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center color-text-transaction">
                                        <span>TEST1</span>
                                        <span>TEST2</span>
                                        <span>TEST3</span>
                                    </div>
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center text-white">
                                        <span>TEST 1</span>
                                        <span>TEST 2</span>
                                        <span>TEST 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="d-flex justify-content-between align-items-center mt-5">
                            <h4 class="text-white">Open Orders</h4>
                            <button class="btn">
                                <div class="btn-crypto-homepage d-flex justify-content-center align-items-center text-white">
                                    <span>
                                        Send
                                    </span>
                                </div>
                            </button>
                        </div>
    
                        <hr style="color: #ffffff;">
    
                        <div class="d-flex justify-content-between text-white">
                            <p class="fs-6 fw-bold">BTC/USDX</p>
                            <span>
                                2022/07/01 08:20:15
                            </span>
                        </div>
    
                        <div class="d-flex justify-content-between text-white">
                            <p class="fs-6 "><span class="text-danger">Sell</span> Limit</p>
                            <a href="" class="btn btn-cancelorder-transaction">
                                Cancel
                            </a>
                        </div>
    
                        <div class="row text-white">
                            <div class="col-3 text-secondary">Price</div>
                            <div class="col-3 text-center">9.9</div>
                            <div class="col-3 text-center text-secondary">Filled</div>
                            <div class="col-3 text-end">0.00%</div>
                        </div>
                        <div class="row text-white">
                            <div class="col-3 text-secondary">Amount</div>
                            <div class="col-3 text-center">83.3</div>
                            <div class="col-3 text-center text-secondary">Total</div>
                            <div class="col-3 text-end">≈738.967 USDX</div>
                        </div>
    
                        <hr style="color: #ffffff;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } elseif($transaction == 'buy'){?>
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
    
                        <div class="row mb-4">
                            <div class="col-12 text-white">
                                <h2 class="text-center fw-bold">Trade</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="trade-menu">
                                    <div class="trade-menu-top d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <img src="<?= base_url()?>assets/img/crypto-curr/bitcoin.png" alt="curr">
                                            </div>
                                            <div>
                                                <span class="trade-menu-text-white">
                                                    Bitcoin
                                                </span>
                                                <br>
                                                <span class="trade-menu-text-gray">
                                                    BTC
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="trade-menu-text-gray">
                                                Bitcoin balance
                                            </span>
                                            <br>
                                            <span class="d-flex justify-content-end trade-menu-text-white">
                                                3,5 BTC
                                            </span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
    
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="balance-transaction text-white p-3 d-flex flex-column justify-content-center align-items-center">
                                    <span>USDX Balance</span>
                                    <h3>USDX 100</h3>
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-4">
                            <div class="d-flex justify-content-center btn-transaction-buy-sell">
                                <a href="<?= base_url(); ?>trade/transaction?transaction=<?= base64_encode('buy') ?>" class="d-block d-flex justify-content-center align-items-center activebuy">Buy</a>   
                                <a href="<?= base_url(); ?>trade/transaction?transaction=<?= base64_encode('sell') ?>" class="d-block d-flex justify-content-center align-items-center">Sell</a>   
                            </div>
                        </div>
    
                        <div class="mt-4">
                            <a href="<?= base_url()?>trade">
                                <div class="balance-during-transaction d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="<?= base_url()?>assets/img/crypto-curr/bitcoin.png" alt="curr">
                                        </div>
                                        <div>
                                            Bitcoin
                                            <br>
                                            <span>
                                                BTC
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <span>
                                            $1231213123
                                        </span>
                                        <br>
                                        <span class="d-flex justify-content-end text-success">
                                            +12%
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
    
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-limit-transaction w-100 py-3">Limit</button>
                                <div class="input-transaction d-flex justify-content-between mt-4">
                                    <input type="text" class="form-control money-input" name="price"
                                    id="price" placeholder="Price" >
                                    <span class="d-flex align-items-center me-3">
                                        USDX
                                    </span>
                                </div>
                                <div class="input-transaction d-flex justify-content-between mt-4">
                                    <input type="text" class="form-control money-input" name="amount"
                                    id="amount" placeholder="Amount" >
                                    <span class="d-flex align-items-center me-3">
                                        BTC
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between percen-after-transaction mt-3">
                                    <div>25%</div>
                                    <div>25%</div>
                                    <div>25%</div>
                                    <div>25%</div>
                                </div>
                                <div class="input-transaction d-flex justify-content-between mt-4">
                                    <input type="text" class="form-control money-input" name="resultamount"
                                    id="resultamount" placeholder="Amount" value="430122">
                                    <span class="d-flex align-items-center me-3">
                                        USDX
                                    </span>
                                </div>
                                <a href="" class="btn btn-buy-transaction w-100 d-block py-3 mt-4">Buy BTC</a>
                            </div>
                            <div class="col-6 mt-4">
                                <p class="text-secondary text-center fw-semibold">Current orders</p>
                                <div class="row">
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center color-text-transaction">
                                        <span>TEST1</span>
                                        <span>TEST2</span>
                                        <span>TEST3</span>
                                    </div>
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center text-white">
                                        <span>TEST 1</span>
                                        <span>TEST 2</span>
                                        <span>TEST 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="d-flex justify-content-between align-items-center mt-5">
                            <h4 class="text-white">Open Orders</h4>
                            <button class="btn">
                                <div class="btn-crypto-homepage d-flex justify-content-center align-items-center text-white">
                                    <span>
                                        Send
                                    </span>
                                </div>
                            </button>
                        </div>
    
                        <hr style="color: #ffffff;">
    
                        <div class="d-flex justify-content-between text-white">
                            <p class="fs-6 fw-bold">BTC/USDX</p>
                            <span>
                                2022/07/01 08:20:15
                            </span>
                        </div>
    
                        <div class="d-flex justify-content-between text-white">
                            <p class="fs-6 "><span class="text-success">Buy</span> Limit</p>
                            <a href="" class="btn btn-cancelorder-transaction">
                                Cancel
                            </a>
                        </div>
    
                        <div class="row text-white">
                            <div class="col-3 text-secondary">Price</div>
                            <div class="col-3 text-center">9.9</div>
                            <div class="col-3 text-center text-secondary">Filled</div>
                            <div class="col-3 text-end">0.00%</div>
                        </div>
                        <div class="row text-white">
                            <div class="col-3 text-secondary">Amount</div>
                            <div class="col-3 text-center">83.3</div>
                            <div class="col-3 text-center text-secondary">Total</div>
                            <div class="col-3 text-end">≈738.967 USDX</div>
                        </div>
    
                        <hr style="color: #ffffff;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>