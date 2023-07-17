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
                        <div class="col-10">
                            <div class="receive-title d-flex flex-row justify-content-center align-items-center my-5">
                                <h2 class="text-balance-crypto f-poppins text-center">USDX Balance : 0,00</h2>
                            </div>
                            <div>
                                <a href="<?= base_url()?>transfer_crypto/send_crypto" class="transfer-crypto-select d-flex justify-content-center align-items-center my-3">
                                    <div>
                                        <h3 class="text-center">
                                            Send
                                        </h3>
                                    </div>
                                </a>
                                <a href="<?= base_url()?>transfer_crypto/request_crypto" class="transfer-crypto-select d-flex justify-content-center align-items-center my-3">
                                    <div>
                                        <h3 class="text-center">
                                            Request
                                        </h3>
                                    </div>
                                </a>
                                <a href="<?= base_url()?>transfer_crypto/receive_crypto" class="transfer-crypto-select d-flex justify-content-center align-items-center my-3">
                                    <div>
                                        <h3 class="text-center">
                                            Receive
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
    
                </div>
            </div>
        </div>
    </div>
    
</div>