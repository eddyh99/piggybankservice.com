<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                
                <div class="row" style="margin-top: 5rem;">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 box-code-freedy px-4 py-3">
                            <div class="d-flex  flex-row">
                                <div class="d-flex flex-column">
                                    <div class="copy-uqcode mt-3 mb-2 me-4 d-flex flex-row align-items-center">
                                        <span class="me-2">UNIQUE CODE : </span>
                                        <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                                        <a class="btn btn-copy me-2" id="btnuq">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 my-2">Copy & share your referral link to earn money</span>
                                        <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                                            <input class="me-2" type="text" name="" id="refcode" value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly style="min-width: 28ch;">
                                            <a class="btn btn-copy me-2" id="btnref">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>Thumbnail.png" download class="qrcode-download ms-auto mt-3 d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="90" height="90">
                                    <div>
                                        <img class="img-fluid d-block d-sm-none" src="<?=base_url()?>assets/img/btn-qrdw-mobile.png" alt="dw-qr" width="15" height="auto">
                                    </div>
                                    <div>
                                        <img class="img-fluid d-none d-sm-block" src="<?=base_url()?>assets/img/btn-qrdw.png" alt="dw-qr" width="90" height="auto">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 text-center mt-4">
                                <div class="d-inline-block btn-head-crypto">
                                    <a class="crypto px-4 py-2 active" href="<?= base_url() ?>homepage/">FIAT</a>
                                    <a class="crypto px-4 py-2" href="<?= base_url() ?>homepage/crypto">CRYPTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 


                <div class="row d-flex justify-content-center">
                    <div class="col-12 mx-auto my-4">
                        <h1 class="text-blue-freedy fw-bold f-alegreya text-center">Dashboard</h1>
                    </div>

                    <div class="col-12 menus-list-app mb-2">
                        <div class="row f-alegreya currencies-card mx-auto">
                            <div class="col-12 col-md-6 text-center mx-auto">
                                <a href="<?= base_url() ?>homepage/setting_currency" class="d-flex align-items-center justify-content-center p-2 my-2">
                                    <svg width="45" height="50" viewBox="0 0 45 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.16429 36.9151C2.20579 35.1289 1.46072 33.2193 0.946777 31.2317C2.0653 30.6187 3.00465 29.6841 3.66091 28.5315C4.31717 27.3789 4.66477 26.0531 4.66524 24.7008C4.66571 23.3485 4.31903 22.0224 3.66357 20.8693C3.00811 19.7161 2.06941 18.7808 0.951312 18.1669C1.97625 14.1731 3.92778 10.5263 6.62206 7.56986C7.67434 8.30709 8.89539 8.71621 10.1501 8.75193C11.4048 8.78765 12.6441 8.44858 13.7311 7.77225C14.818 7.09592 15.7101 6.1087 16.3086 4.91985C16.9072 3.731 17.1888 2.38687 17.1223 1.03622C20.8457 -0.000704914 24.7526 0.000977069 28.4752 1.04111C28.4093 2.39173 28.6915 3.73566 29.2905 4.92417C29.8895 6.11269 30.7819 7.09944 31.8691 7.77525C32.9562 8.45106 34.1957 8.78957 35.4503 8.75332C36.7049 8.71707 37.9258 8.30748 38.9777 7.56986C40.2906 9.01146 41.456 10.651 42.4355 12.4811C43.4173 14.3112 44.1519 16.2195 44.653 18.1644C43.5345 18.7775 42.5951 19.712 41.9389 20.8646C41.2826 22.0173 40.935 23.3431 40.9346 24.6953C40.9341 26.0476 41.2808 27.3737 41.9362 28.5269C42.5917 29.68 43.5304 30.6153 44.6485 31.2293C43.6235 35.223 41.672 38.8699 38.9777 41.8263C37.9255 41.089 36.7044 40.6799 35.4497 40.6442C34.195 40.6085 32.9557 40.9476 31.8687 41.6239C30.7818 42.3002 29.8897 43.2874 29.2912 44.4763C28.6926 45.6651 28.411 47.0093 28.4774 48.3599C24.7541 49.3968 20.8472 49.3952 17.1246 48.355C17.1905 47.0044 16.9083 45.6605 16.3093 44.472C15.7103 43.2835 14.8179 42.2967 13.7307 41.6209C12.6436 40.9451 11.4041 40.6066 10.1495 40.6428C8.89489 40.6791 7.67404 41.0887 6.62206 41.8263C5.28201 40.3528 4.12021 38.7026 3.16429 36.9151ZM15.9977 37.394C18.4139 38.8957 20.2306 41.3059 21.0994 44.1622C22.2308 44.277 23.3667 44.2794 24.4982 44.1646C25.3675 41.3079 27.185 38.8977 29.6021 37.3964C32.0173 35.8905 34.8636 35.3989 37.5946 36.0159C38.2522 35.019 38.819 33.9561 39.2906 32.8443C37.4301 30.6048 36.4022 27.704 36.4042 24.6981C36.4042 21.6194 37.4699 18.7435 39.2906 16.5518C38.8157 15.4404 38.2464 14.3787 37.5901 13.3803C34.8608 13.9967 32.0164 13.506 29.6021 12.0022C27.1859 10.5004 25.3692 8.09026 24.5004 5.23397C23.369 5.11913 22.233 5.11669 21.1016 5.23153C20.2323 8.08822 18.4148 10.4984 15.9977 11.9997C13.5825 13.5056 10.7362 13.9973 8.00517 13.3803C7.34891 14.3779 6.78107 15.4397 6.30916 16.5518C8.16971 18.7913 9.19755 21.6922 9.19555 24.6981C9.19555 27.7767 8.12987 30.6526 6.30916 32.8443C6.78411 33.9557 7.35338 35.0174 8.0097 36.0159C10.739 35.3994 13.5834 35.8901 15.9977 37.394ZM22.7999 32.0283C20.9958 32.0283 19.2657 31.256 17.99 29.8813C16.7144 28.5066 15.9977 26.6422 15.9977 24.6981C15.9977 22.754 16.7144 20.8895 17.99 19.5148C19.2657 18.1402 20.9958 17.3679 22.7999 17.3679C24.6039 17.3679 26.3341 18.1402 27.6098 19.5148C28.8854 20.8895 29.6021 22.754 29.6021 24.6981C29.6021 26.6422 28.8854 28.5066 27.6098 29.8813C26.3341 31.256 24.6039 32.0283 22.7999 32.0283ZM22.7999 27.1415C23.4012 27.1415 23.978 26.884 24.4032 26.4258C24.8284 25.9676 25.0673 25.3461 25.0673 24.6981C25.0673 24.05 24.8284 23.4286 24.4032 22.9703C23.978 22.5121 23.4012 22.2547 22.7999 22.2547C22.1985 22.2547 21.6218 22.5121 21.1966 22.9703C20.7714 23.4286 20.5325 24.05 20.5325 24.6981C20.5325 25.3461 20.7714 25.9676 21.1966 26.4258C21.6218 26.884 22.1985 27.1415 22.7999 27.1415Z" fill="url(#paint0_linear_30_4399)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_30_4399" x1="22.7999" y1="0.259766" x2="22.7999" y2="49.1364" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#23832C" />
                                                <stop offset="1" stop-color="#1C6701" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <span class="ms-2">Select Currencies</span>
                                </a>
                            </div>
                            <!-- <div class="col-12 col-md-6 text-center mx-auto">
                                <a href="<?= base_url() ?>card" class="d-flex align-items-center justify-content-center p-2 my-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                        <path d="M7.75 19.5C7.75 17.6144 7.75 16.6716 8.33579 16.0858C8.92157 15.5 9.86438 15.5 11.75 15.5H50.25C52.1356 15.5 53.0784 15.5 53.6642 16.0858C54.25 16.6716 54.25 17.6144 54.25 19.5V42.5C54.25 44.3856 54.25 45.3284 53.6642 45.9142C53.0784 46.5 52.1356 46.5 50.25 46.5H11.75C9.86438 46.5 8.92157 46.5 8.33579 45.9142C7.75 45.3284 7.75 44.3856 7.75 42.5V19.5Z" fill="url(#paint0_linear_1010_4571)"/>
                                        <ellipse cx="15.5001" cy="38.75" rx="2.58333" ry="2.58333" fill="#B6FFBD"/>
                                        <rect x="7.75" y="23.25" width="46.5" height="5.16667" fill="#B6FFBD"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_1010_4571" x1="7.75" y1="46.5" x2="52.5751" y2="13.2425" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#1B8036"/>
                                                <stop offset="1" stop-color="#00880E"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <span class="ms-5">Card</span>
                                </a>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-12 curencies-list-app">
                        <div class="col-12">
                            <?php foreach ($currency as $dt) {
                                if ($dt->status == 'active') {
                                    if (($dt->currency == "USD") || ($dt->currency == "EUR")) {
                            ?>
                                        <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                            <span class="me-auto"><?= $dt->currency ?></span>
                                            <span><?= $dt->symbol; ?>
                                                <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                        </a>
                            <?php }
                                }
                            }
                            ?>
                            <?php foreach ($currency as $dt) {
                                if ($dt->status == 'active') {
                                    if (($dt->currency != "USD") && ($dt->currency != "EUR")) {
                            ?>
                                        <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                            <span class="me-auto"><?= $dt->currency ?></span>
                                            <span><?= $dt->symbol; ?>
                                                <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                        </a>
                            <?php }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>