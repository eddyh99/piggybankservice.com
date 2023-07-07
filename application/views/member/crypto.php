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
    
    <div class="container-body-crypto d-flex justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="container">
                <div class="app-container py-5">
    
                    <!-- Start Information Member -->
                    <div class="row" style="margin-top: 5rem;">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-12 box-code-freedy px-4 py-3">
                                <div class="copy-uqcode mt-3 mb-2 d-flex flex-row align-items-center">
                                    <span class="me-2">Short Code : </span>
                                    <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>"
                                        readonly style="color: #fff;">
                                    <a class="btn btn-copy me-2" id="btnuq">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                                                stroke="#1B8036" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <span class="">Copy & share your referral link to earn money</span>
                                <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                                    <input class="me-2" type="text" name="" id="refcode"
                                        value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                                    <a class="btn btn-copy me-2" id="btnref">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                                                stroke="#1B8036" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-100 text-center">
                                    <div class="d-inline-block btn-head-crypto">
                                        <a class="crypto px-4 py-2" href="<?= base_url() ?>homepage/">FIAT</a>
                                        <a class="crypto px-4 py-2 active"
                                            href="<?= base_url() ?>homepage/crypto">CRYPTO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Information Member -->
    
                    <!-- Start Content -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <div class="receive-title d-flex flex-row justify-content-center align-items-center my-5">
                                <h2 class="text-balance-crypto f-poppins">USDX Balance : 0,00</h2>
                            </div>
                            <div class="text-white d-flex flex-column flex-md-row justify-content-around align-items-center gap-3">
                                <a href="<?= base_url()?>topup_crypto" class="text-white">
                                    <div class="btn-crypto-homepage d-flex justify-content-center align-items-center">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4225 19.9082C6.2337 19.9082 2.0162 15.6907 2.0162 10.502C2.0162 5.3132 6.2337 1.0957 11.4225 1.0957C11.7812 1.0957 12.0787 1.3932 12.0787 1.75195C12.0787 2.1107 11.7812 2.4082 11.4225 2.4082C6.95995 2.4082 3.3287 6.03945 3.3287 10.502C3.3287 14.9645 6.95995 18.5957 11.4225 18.5957C15.885 18.5957 19.5162 14.9645 19.5162 10.502C19.5162 10.1432 19.8137 9.8457 20.1725 9.8457C20.5312 9.8457 20.8287 10.1432 20.8287 10.502C20.8287 15.6907 16.6112 19.9082 11.4225 19.9082Z" fill="white"/>
                                            <path d="M6.94147 9.67628H11.4224M11.4224 9.67628H15.9034M11.4224 9.67628V5.19531M11.4224 9.67628V14.1573" stroke="white" stroke-opacity="0.9" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="ms-2">
                                            Topup
                                        </span>
                                    </div>
                                </a>
    
                                <a href="<?= base_url()?>transfer_crypto" class="text-white">
                                    <div class="btn-crypto-homepage d-flex justify-content-center align-items-center">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.3467 13.8505H9.78004C8.67171 13.8505 7.76337 12.9171 7.76337 11.7671C7.76337 11.4255 8.0467 11.1421 8.38837 11.1421C8.73003 11.1421 9.01337 11.4255 9.01337 11.7671C9.01337 12.2255 9.35504 12.6005 9.78004 12.6005H11.3467C11.6717 12.6005 11.93 12.3088 11.93 11.9505C11.93 11.5005 11.805 11.4338 11.5217 11.3338L9.01337 10.4588C8.48003 10.2671 7.76337 9.88379 7.76337 8.65879C7.76337 7.61712 8.58838 6.75879 9.59671 6.75879H11.1634C12.2717 6.75879 13.18 7.69212 13.18 8.84212C13.18 9.18379 12.8967 9.46712 12.555 9.46712C12.2134 9.46712 11.93 9.18379 11.93 8.84212C11.93 8.38379 11.5884 8.00879 11.1634 8.00879H9.59671C9.27171 8.00879 9.01337 8.30045 9.01337 8.65879C9.01337 9.10879 9.13836 9.17545 9.42169 9.27545L11.93 10.1504C12.4634 10.3421 13.18 10.7255 13.18 11.9505C13.18 13.0005 12.355 13.8505 11.3467 13.8505Z" fill="white"/>
                                            <path d="M10.4717 14.6836C10.13 14.6836 9.84668 14.4003 9.84668 14.0586V6.55859C9.84668 6.21693 10.13 5.93359 10.4717 5.93359C10.8133 5.93359 11.0967 6.21693 11.0967 6.55859V14.0586C11.0967 14.4003 10.8133 14.6836 10.4717 14.6836Z" fill="white"/>
                                            <path d="M10.4717 19.2673C5.53003 19.2673 1.51337 15.2506 1.51337 10.3089C1.51337 5.36725 5.53003 1.35059 10.4717 1.35059C10.8134 1.35059 11.0967 1.63392 11.0967 1.97559C11.0967 2.31725 10.8134 2.60059 10.4717 2.60059C6.2217 2.60059 2.76337 6.05892 2.76337 10.3089C2.76337 14.5589 6.2217 18.0173 10.4717 18.0173C14.7217 18.0173 18.18 14.5589 18.18 10.3089C18.18 9.96725 18.4634 9.68392 18.805 9.68392C19.1467 9.68392 19.43 9.96725 19.43 10.3089C19.43 15.2506 15.4134 19.2673 10.4717 19.2673Z" fill="white"/>
                                            <path d="M18.805 5.93392C18.4633 5.93392 18.18 5.65059 18.18 5.30892V2.60059H15.4717C15.13 2.60059 14.8467 2.31725 14.8467 1.97559C14.8467 1.63392 15.13 1.35059 15.4717 1.35059H18.805C19.1467 1.35059 19.43 1.63392 19.43 1.97559V5.30892C19.43 5.65059 19.1467 5.93392 18.805 5.93392Z" fill="white"/>
                                            <path d="M14.6383 6.76712C14.48 6.76712 14.3216 6.70879 14.1966 6.58379C13.955 6.34212 13.955 5.94212 14.1966 5.70046L18.3633 1.53379C18.605 1.29212 19.005 1.29212 19.2466 1.53379C19.4883 1.77546 19.4883 2.17545 19.2466 2.41712L15.08 6.58379C14.955 6.70879 14.7966 6.76712 14.6383 6.76712Z" fill="white"/>
                                        </svg>
                                        <span class="ms-2">
                                            Transfer
                                        </span>
                                    </div>
                                </a>
    
                                <a href="<?= base_url()?>withdraw_crypto" class="text-white">
                                    <div class="btn-crypto-homepage d-flex justify-content-center align-items-center">
                                        <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.237 10.2005C14.5289 10.5214 15.7232 11.0915 15.7232 13.0796L15.7246 13.0798C15.7246 14.5862 14.8035 15.6511 13.3828 15.8682V17.0852C13.3828 17.5784 13.0518 17.8366 12.7247 17.8366C12.3976 17.8366 12.0669 17.5784 12.0669 17.0852V15.8466C10.2778 15.5326 9.91906 14.1251 9.75657 13.4807L9.74521 13.4215C9.73598 13.3698 9.72461 13.3059 9.72461 13.2307C9.72461 12.835 9.96701 12.5012 10.3282 12.4006L10.3504 12.3956C10.4241 12.3808 10.4852 12.3689 10.5614 12.3689C10.9107 12.3689 11.1939 12.6058 11.2833 12.9735C11.436 13.638 11.6644 14.2299 12.7847 14.2299C13.6478 14.2299 14.1626 13.804 14.1626 13.0896C14.1626 12.5049 13.9767 12.1822 12.9218 11.9305L12.1811 11.7459C11.0584 11.4742 9.90912 10.9344 9.90912 8.99791C9.90912 7.93362 10.4724 6.71266 12.0021 6.4318V5.24125C12.0021 4.25552 13.318 4.25552 13.318 5.24125V6.42471C14.742 6.67266 15.256 7.75881 15.4389 8.44889C15.4692 8.54327 15.4843 8.64037 15.4843 8.73829C15.4843 9.13313 15.2357 9.4665 14.8788 9.54984C14.8209 9.56359 14.7435 9.57901 14.6573 9.57901C14.3247 9.57901 14.0582 9.36899 13.9435 9.01687L13.9342 8.98332C13.8373 8.57953 13.6036 8.04197 12.6915 8.04197C11.9213 8.04197 11.4616 8.39972 11.4616 8.99832C11.4616 9.45962 11.5397 9.80424 12.5523 10.0378L13.237 10.2005Z" fill="white" fill-opacity="0.9"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.32461 0.501953C0.993239 0.501953 0.724609 0.80043 0.724609 1.16862C0.724609 1.53681 0.993239 1.83529 1.32461 1.83529H2.52461L2.52461 16.1757C2.5246 17.1465 2.5246 17.9159 2.5702 18.536C2.61683 19.1701 2.71411 19.7066 2.93878 20.1966C3.3031 20.991 3.88443 21.637 4.59945 22.0418C5.04039 22.2914 5.52329 22.3995 6.094 22.4513C6.65208 22.502 7.34446 22.502 8.21814 22.502H17.231C18.1047 22.502 18.7971 22.502 19.3552 22.4513C19.9259 22.3995 20.4088 22.2914 20.8498 22.0418C21.5648 21.637 22.1461 20.991 22.5104 20.1966C22.7351 19.7066 22.8324 19.1701 22.879 18.536C22.9246 17.9159 22.9246 17.1466 22.9246 16.1758V1.83529H24.1241C24.4555 1.83529 24.7246 1.53681 24.7246 1.16862C24.7246 0.80043 24.456 0.501953 24.1246 0.501953H1.32461ZM3.72461 16.1464V1.83529H21.7246V16.1464C21.7246 17.153 21.7241 17.8679 21.683 18.4274C21.6424 18.9791 21.5653 19.3206 21.4412 19.5913C21.192 20.1348 20.7942 20.5768 20.305 20.8538C20.0614 20.9916 19.754 21.0773 19.2575 21.1224C18.754 21.1681 18.1106 21.1686 17.2046 21.1686H8.24461C7.33863 21.1686 6.69522 21.1681 6.19171 21.1224C5.69521 21.0773 5.38781 20.9916 5.14423 20.8538C4.65501 20.5768 4.25726 20.1348 4.00799 19.5913C3.88388 19.3206 3.80678 18.9791 3.76621 18.4274C3.72508 17.8679 3.72461 17.153 3.72461 16.1464Z" fill="white" fill-opacity="0.9"/>
                                        </svg>
                                        <span class="ms-2">
                                            Withdraw
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <a href="<?= base_url()?>crypto/setting_currency">
                                <div class="btn-toggle-crypto-currency d-flex justify-content-center align-items-center mx-auto my-5">
                                    <span class="text-toggle-crypto-currency f-poppins me-1 me-md-4">Active/disactive crypto currency</span>
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.779 20.5812C13.9623 20.5812 13.1456 20.2662 12.5273 19.6479L4.92062 12.0412C4.58229 11.7029 4.58229 11.1429 4.92062 10.8045C5.25895 10.4662 5.81895 10.4662 6.15729 10.8045L13.764 18.4112C14.324 18.9712 15.234 18.9712 15.794 18.4112L23.4006 10.8045C23.739 10.4662 24.299 10.4662 24.6373 10.8045C24.9756 11.1429 24.9756 11.7029 24.6373 12.0412L17.0306 19.6479C16.4123 20.2662 15.5956 20.5812 14.779 20.5812Z" fill="white"/>
                                    </svg>
                                </div>
                            </a>
                            <div>
                                <div class="is-active-crypto-curr d-flex justify-content-between">
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
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
    
                </div>
            </div>
        </div>
    </div>
    
    <div class="navbar-app fixed-bottom d-flex justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex justify-content-end align-items-center top"
            style="background-color: #121212;">
            <a href="<?= base_url() ?>auth/logout" class="d-flex align-items-center border-0">
                <span>Log out</span>
                <div class="icon-menus d-flex align-items-center home-svg">
                    <svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                        style="fill: #000;">
                        <path
                            d="M23.1087 8.81998C22.1677 6.45544 20.4359 4.49034 18.2084 3.25949C15.981 2.02865 13.3956 1.60823 10.893 2.06986C8.39026 2.5315 6.12506 3.84662 4.48331 5.79116C2.84157 7.73569 1.92485 10.1893 1.88936 12.734C1.85387 15.2786 2.70181 17.7569 4.28869 19.7465C5.87558 21.736 8.10322 23.1138 10.5921 23.645C13.0809 24.1763 15.677 23.8281 17.9379 22.6599C20.1988 21.4916 21.9847 19.5756 22.9913 17.2382L20.8356 16.3099C20.0438 18.1485 18.6389 19.6557 16.8604 20.5747C15.0819 21.4937 13.0398 21.7675 11.082 21.3497C9.12423 20.9318 7.3719 19.848 6.12361 18.2829C4.87533 16.7179 4.20832 14.7684 4.23623 12.7667C4.26415 10.765 4.98526 8.83492 6.27671 7.3053C7.56815 5.77567 9.35002 4.74116 11.3187 4.37803C13.2874 4.01489 15.3211 4.34561 17.0733 5.31382C18.8254 6.28204 20.1877 7.82784 20.9279 9.68785L23.1087 8.81998Z"
                            fill="url(#paint0_linear_319_7)" />
                        <path d="M18 13.4414L34 13.4414" stroke="url(#paint1_linear_319_7)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M26 7.00036L34 13.4396L26 19.8789" stroke="url(#paint2_linear_319_7)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_319_7" x1="10.7999" y1="2.08743" x2="14.9766" y2="23.6873"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#23832C" />
                                <stop offset="1" stop-color="#1C6701" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_319_7" x1="26" y1="13.4414" x2="26" y2="12.4414"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#23832C" />
                                <stop offset="1" stop-color="#1C6701" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_319_7" x1="30" y1="19.8789" x2="30" y2="7.00036"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#23832C" />
                                <stop offset="1" stop-color="#1C6701" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>