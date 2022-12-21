<form id="form_submit" action="<?= base_url() ?>admin/fee/updatefee" method="post" class="col-12"
    onsubmit="return validate()">
    <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
        value="<?php echo $this->security->get_csrf_hash(); ?>">
    <input type="hidden" name="currency" value="<?= $currency ?>">

    <div id="layoutSidenav_content">
        <main>
            <?php if (@isset($_SESSION["failed"])) { ?>
            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
            <?php if (@isset($_SESSION["success"])) { ?>
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
            <div class="container-fluid px-4">
                <div class="col-12 card mb-5 mt-3">
                    <div class="card-header fw-bold">
                        TRACKLESS BANK Fee for <?= $currency ?>
                    </div>
                    <div class="card-body">
                        <?php
                        if (
                            ($currency == "USD") ||
                            ($currency == "EUR")
                        ) { ?>
                        <div class="mb-3" id="topup_circuit_fxd">
                            <label class="form-label">Topup Circuit (Fixed)</label>
                            <input type="text" id="topup_circuit_fxd" name="topup_circuit_fxd" class="form-control"
                                value="<?= $fee['topup_circuit_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="topup_circuit_pct">
                            <label class="form-label">Topup Circuit (%)</label>
                            <input type="text" id="topup_circuit_pct" name="topup_circuit_pct" class="form-control"
                                value="<?= $fee['topup_circuit_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="topup_outside_fxd">
                            <label class="form-label">Topup Outside (Fixed)</label>
                            <input type="text" id="topup_outside_fxd" name="topup_outside_fxd" class="form-control"
                                value="<?= $fee['topup_outside_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="topup_outside_pct">
                            <label class="form-label">Topup Outside (%)</label>
                            <input type="text" id="topup_outside_pct" name="topup_outside_pct" class="form-control"
                                value="<?= $fee['topup_outside_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <?php
                        } ?>
                        <?php
                        if (($currency == "AUD") ||
                            ($currency == "NZD") ||
                            ($currency == "CAD") ||
                            ($currency == "HUF") ||
                            ($currency == "SGD") ||
                            ($currency == "TRY")
                        ) {
                        ?>
                        <div class="mb-3" id="topup_circuit_fxd">
                            <label class="form-label">Topup Circuit (Fixed)</label>
                            <input type="text" id="topup_circuit_fxd" name="topup_circuit_fxd" class="form-control"
                                value="<?= $fee['topup_circuit_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="topup_circuit_pct">
                            <label class="form-label">Topup Circuit (%)</label>
                            <input type="text" id="topup_circuit_pct" name="topup_circuit_pct" class="form-control"
                                value="<?= $fee['topup_circuit_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <?php
                        } ?>

                        <div class="mb-3" id="wallet_sender_fxd">
                            <label class="form-label">Wallet Sender (Fixed)</label>
                            <input type="text" id="wallet_sender_fxd" name="wallet_sender_fxd" class="form-control"
                                value="<?= $fee['wallet_sender_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="wallet_sender_pct">
                            <label class="form-label">Wallet Sender (%)</label>
                            <input type="text" id="wallet_sender_pct" name="wallet_sender_pct" class="form-control"
                                value="<?= $fee['wallet_sender_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="wallet_receiver_fxd">
                            <label class="form-label">Wallet Receive (Fixed)</label>
                            <input type="text" id="wallet_receiver_fxd" name="wallet_receiver_fxd" class="form-control"
                                value="<?= $fee['wallet_receiver_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="wallet_receiver_pct">
                            <label class="form-label">Wallet Receive (%)</label>
                            <input type="text" id="wallet_receiver_pct" name="wallet_receiver_pct" class="form-control"
                                value="<?= $fee['wallet_receiver_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="walletbank_circuit_fxd">
                            <label class="form-label">Walletbank Circuit (Fixed)</label>
                            <input type="text" id="walletbank_circuit_fxd" name="walletbank_circuit_fxd"
                                class="form-control" value="<?= $fee['walletbank_circuit_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="walletbank_circuit_pct">
                            <label class="form-label">Walletbank Circuit (%)</label>
                            <input type="text" id="walletbank_circuit_pct" name="walletbank_circuit_pct"
                                class="form-control" value="<?= $fee['walletbank_circuit_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>

                        <?php
                        if (($currency == "USD") ||
                            ($currency == "EUR")
                        ) {
                        ?>
                        <div class="mb-3" id="walletbank_outside_fxd">
                            <label class="form-label">Walletbank Outside (Fixed)</label>
                            <input type="text" id="walletbank_outside_fxd" name="walletbank_outside_fxd"
                                class="form-control" value="<?= $fee['walletbank_outside_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="walletbank_outside_pct">
                            <label class="form-label">Walletbank Outside (%)</label>
                            <input type="text" id="walletbank_outside_pct" name="walletbank_outside_pct"
                                class="form-control" value="<?= $fee['walletbank_outside_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <?php
                        } ?>

                        <div class="mb-3" id="referral_send_fxd">
                            <label class="form-label">Referral Wallet to Wallet Sender (Fixed)</label>
                            <input type="text" id="referral_send_fxd" name="referral_send_fxd" class="form-control"
                                value="<?= $fee['referral_send_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_send_pct">
                            <label class="form-label">Referral Wallet to Wallet Sender (%)</label>
                            <input type="text" id="referral_send_pct" name="referral_send_pct" class="form-control"
                                value="<?= $fee['referral_send_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_receive_fxd">
                            <label class="form-label">Referral Wallet to Wallet Receive (Fixed)</label>
                            <input type="text" id="referral_receive_fxd" name="referral_receive_fxd"
                                class="form-control" value="<?= $fee['referral_receive_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_receive_pct">
                            <label class="form-label">Referral Wallet to Wallet Receive (%)</label>
                            <input type="text" id="referral_receive_pct" name="referral_receive_pct"
                                class="form-control" value="<?= $fee['referral_receive_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_topup_fxd">
                            <label class="form-label">Referral Topup (Fixed)</label>
                            <input type="text" id="referral_topup_fxd" name="referral_topup_fxd" class="form-control"
                                value="<?= $fee['referral_topup_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_topup_pct">
                            <label class="form-label">Referral Topup (%)</label>
                            <input type="text" id="referral_topup_pct" name="referral_topup_pct" class="form-control"
                                value="<?= $fee['referral_topup_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_bank_fxd">
                            <label class="form-label">Referral Wallet to Bank (Fixed)</label>
                            <input type="text" id="referral_bank_fxd" name="referral_bank_fxd" class="form-control"
                                value="<?= $fee['referral_bank_fxd'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3" id="referral_bank_pct">
                            <label class="form-label">Referral Wallet to Bank (%)</label>
                            <input type="text" id="referral_bank_pct" name="referral_bank_pct" class="form-control"
                                value="<?= $fee['referral_bank_pct'] ?>"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');input(this);">
                        </div>
                        <div class="mb-3">
                            <a href="<?= base_url() ?>admin/fee" class="btn btn-warning">Cancel</a>
                            <button id="btnconfirm" class="btn btn-success">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
</form>