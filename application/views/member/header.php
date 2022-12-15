<div class="row" style="margin-top: 5rem;">
    <div class="col-12 d-flex justify-content-center flex-column">
        <div class="col-12 box-code-freedy px-4 py-3">
            <div class="copy-uqcode mt-3 mb-2 d-flex flex-row align-items-center">
                <span class="me-2">UNIQUE CODE : </span>
                <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                <a class="btn btn-copy me-2" id="btnuq">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                            stroke="#1B8036" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <span class="">Copy & share your referral link to earn money</span>
            <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                <input class="me-2" type="text" name="" id="refcode"
                    value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                <a class="btn btn-copy me-2" id="btnref">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                            stroke="#1B8036" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-12 px-4 py-3">
            <div class="mywallet d-flex mb-4 align-items-center w-100">
                <div class="d-flex flex-column w-100">
                    <div class="saldo-box d-flex flex-row align-items-center w-100 mb-3">
                        <span class="balance me-auto">PiggyBank Balance :</span>
                        <span class="currency-side px-2"><?= $_SESSION["currency"] ?></span>
                    </div>
                    <div class="saldo-box d-flex flex-row align-items-center w-100">
                        <span class="saldo me-auto">
                            <?= $_SESSION["symbol"] ?>
                            <?= number_format(balance($_SESSION['user_id'], $_SESSION["currency"]), 2) ?>
                        </span>
                        <a href="<?= base_url() ?>homepage">
                            <svg width="48" height="47" viewBox="0 0 48 47" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5936 30.611C42.0535 27.0779 42.3896 23.1677 41.5545 19.43C40.7195 15.6924 38.7553 12.3152 35.9382 9.77344C33.121 7.23166 29.5926 5.65306 25.849 5.25957C22.1053 4.86608 18.3348 5.6775 15.0673 7.57974L12.8353 3.59911C16.25 1.61136 20.1168 0.570372 24.0498 0.580023C27.9828 0.589673 31.8446 1.64962 35.2498 3.65411C45.3523 9.59412 49.2223 22.3129 44.5131 32.9187L47.5326 34.6925L38.1613 39.7662L37.7901 28.9633L40.5936 30.611ZM7.40609 16.3889C5.94617 19.922 5.61011 23.8322 6.44516 27.5699C7.28021 31.3076 9.24438 34.6847 12.0615 37.2265C14.8786 39.7682 18.4071 41.3469 22.1507 41.7403C25.8944 42.1338 29.6649 41.3224 32.9323 39.4202L35.1643 43.4008C31.7497 45.3885 27.8829 46.4295 23.9499 46.4199C20.0169 46.4102 16.1551 45.3503 12.7498 43.3458C2.64734 37.4058 -1.22266 24.687 3.48659 14.0812L0.464844 12.3097L9.83609 7.23599L10.2073 18.0389L7.40384 16.3912L7.40609 16.3889ZM27.1836 29.9808L20.8138 23.5L14.4508 29.9808L11.2693 26.7404L20.8161 17.0191L27.1813 23.5L33.5466 17.0191L36.7281 20.2595L27.1813 29.9808H27.1836Z"
                                    fill="url(#paint0_linear_30_4626)" />
                                <defs>
                                    <linearGradient id="paint0_linear_30_4626" x1="23.9987" y1="0.579956" x2="23.9987"
                                        y2="46.4199" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#23832C" />
                                        <stop offset="1" stop-color="#1C6701" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>