<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <?php $this->load->view("member/header"); ?>
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="col-12 receive-note d-flex justify-content-center text-start my-4">
                            <?php
                            if (
                                ($_SESSION["currency"] == "USD") ||
                                ($_SESSION["currency"] == "EUR") ||
                                ($_SESSION["currency"] == "AUD") ||
                                ($_SESSION["currency"] == "NZD") ||
                                ($_SESSION["currency"] == "CAD") ||
                                ($_SESSION["currency"] == "HUF") ||
                                ($_SESSION["currency"] == "SGD") ||
                                ($_SESSION["currency"] == "TRY") ||
                                ($_SESSION["currency"] == "GBP") ||
                                ($_SESSION["currency"] == "RON")
                            ) { ?>
                                <button type="button" class="receive-attention d-flex flex-column text-center col-12 p-3" data-bs-toggle="modal" data-bs-target="#attention">
                                    <span class="w-100 mb-2 fw-bold title">ATTENTION!</span>
                                    <span class="w-100 mb-2 middle">Before make any topup</span>
                                    <span class="w-100 bottom">read carefully how does it work</span>
                                </button>
                            <?php } ?>
                        </div>
                        <div class="col-12 recive-bank  d-flex align-items-center flex-column text-center">
                            <?php
                            if (
                                ($_SESSION["currency"] == "USD") ||
                                ($_SESSION["currency"] == "EUR") ||
                                ($_SESSION["currency"] == "AUD") ||
                                ($_SESSION["currency"] == "NZD") ||
                                ($_SESSION["currency"] == "CAD") ||
                                ($_SESSION["currency"] == "HUF") ||
                                ($_SESSION["currency"] == "SGD") ||
                                ($_SESSION["currency"] == "TRY") ||
                                ($_SESSION["currency"] == "GBP") ||
                                ($_SESSION["currency"] == "RON")
                            ) { ?>
                                <a href="<?= base_url() ?>receive/localbank" class="col-8 py-3 my-2">Local bank</a>
                            <?php } else { ?>
                                <div class="receive-note">
                                    <span class="fw-bold title">To top up this currency you have to covert from another
                                        currency
                                        in <b>SWAP</b>
                                        section</span><br>
                                    <hr>
                                    <span>Or make an international bank transfer toward EURO or
                                        DOLLAR</span>
                                    <hr>
                                </div>

                                <a href="<?= base_url() ?>receive/interbank?currency=USD" class="col-8 py-3 my-2">USD
                                    International</a>
                                <a href="<?= base_url() ?>receive/interbank?currency=EUR" class="col-8 py-3 my-2">EUR
                                    International</a>
                                <div class="receive-note">
                                    <span>
                                        <b>ATTENTION:<br>
                                            UPON THE ARRIVAL OF THE BANK TRANSFER, THE SENT CURRENCY WILL BE CONVERTED INTO
                                            THE
                                            CHOSEN DESTINATION CURRENCY</b>
                                    </span>
                                </div>

                            <?php } ?>
                            <?php
                            if (($_SESSION["currency"] == "USD") ||
                                ($_SESSION["currency"] == "EUR") ||
                                ($_SESSION["currency"] == "GBP")
                            ) { ?>
                                <a href="<?= base_url() ?>receive/interbank" class="col-8 py-3 my-2">International</a>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal attantion -->
<div class="modal fade" id="attention" tabindex="-1" aria-labelledby="attention" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content attention-modal p-2">
            <div class="modal-header border-0">
                <h1 class="modal-title fw-bold">How to topup</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>To top up your wallet or receive money by bank transfer,
                        copy or share the bank details written in the section "add/receive funds" Local or international bank; the causal for payment IS MANDATORY AND IT IS MANDATORY TO WRITE:
                        <br>
                        <br>
                        TOP UP + YOUR UNIQUE CODE NUMBER<br>
                        (THE UNIQUE CODE IDENTIFIES THE RECEIVER USER)<br>
                        <br>
                        EXAMPLE: "causal : topup xxxxxxxx"<br>
                        <img src="<?= base_url() ?>assets/img/attantion-1.png" alt="">
                    </li>

                    <li>receiving bank data for each currency will be the same for all users, THE ONLY DATUM THAT WILL VARY WILL BE THE "CAUSAL" THAT IDENTIFIES THE RECEIVING USER, SO IF YOU WANT TO TOP UP YOUR <b translate="no">PIGGYWALLET</b> YOU MUST WRITE IN THE CAUSAL:<br>
                        <br>
                        TOP UP + UNIQUE CODE OF YOUR WALLET
                    </li>
                    <li>To increase and improve the level of privacy, receiving and sending money will be handled by the payment gateway.</li>
                    <li>IN THE ABSENCE OF THE CAUSAL OR OF THE CORRECT COMPILATION OF ALL THE DATA, THE MONEY WILL BE LOST AND NO LONGER RECOVERABLE.</li>
                </ul>
            </div>
        </div>
    </div>
</div>