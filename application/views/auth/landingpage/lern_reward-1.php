<div class="row">
    <div class="col-12">
        <div class="row mb-5">
            <div class="col-12 col-md-12 col-lg-6 p-3">
                <div class="box-service-list d-flex flex-row">
                    <div class="text-content d-flex flex-column">
                        <div class="top d-flex flex-row">
                            <span class="number">01.</span>
                            <span class="title">Open your account</span>
                        </div>
                        <div class="bot">
                            <p>You can easly open your account in a minute</p>
                        </div>
                    </div>
                    <div class="icon">
                        <img src="<?=base_url()?>assets/img/icon-service-1.png" alt="icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 p-3">
                <div class="box-service-list d-flex flex-row">
                    <div class="text-content d-flex flex-column">
                        <div class="top d-flex flex-row">
                            <span class="number">02.</span>
                            <span class="title">Get your personal
                                link</span>
                        </div>
                        <div class="bot">
                            <p>You will have your personal link after create an account</p>
                        </div>
                    </div>
                    <div class="icon">
                        <img src="<?=base_url()?>assets/img/icon-service-2.png" alt="icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 p-3">
                <div class="box-service-list d-flex flex-row">
                    <div class="text-content d-flex flex-column">
                        <div class="top d-flex flex-row">
                            <span class="number">03.</span>
                            <span class="title">Invite people</span>
                        </div>
                        <div class="bot">
                            <p>
                                Invite people/companies to register on <b translate="no"> PiggyBank </b>
                                using your link
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <img src="<?=base_url()?>assets/img/icon-service-3.png" alt="icon">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 p-3">
                <div class="box-service-list d-flex flex-row">
                    <div class="text-content d-flex flex-column">
                        <div class="top d-flex flex-row">
                            <span class="number">04.</span>
                            <span class="title">Congratulation!</span>
                        </div>
                        <div class="bot">
                            <p>
                                Now you will receive a commission on every fiat transaction or on every buy or selling
                                of crypto that the
                                person/company makes.
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <img src="<?=base_url()?>assets/img/icon-service-4.png" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
        <h2 class="title-top-header fw-bold">Referral earning</h2>
        <span class="fw-bold">(Select currency to see all referral earning)</span>
        <div class="col-12 text-start mx-auto table-responsive my-5">
            <table class="table tbl-piggy-service text-center">
                <tr>
                    <th>
                        <select name="currency" id="currency" class="btn">
                            <option>Select currency</option>
                            <?php foreach ($currency as $dt) {
                                if (($dt->currency == "USD") || ($dt->currency == "EUR")) {?>
                            <option value="<?= $dt->currency ?>"><?= $dt->currency ?></option>
                            <?php } }?>

                            <?php foreach ($currency as $dt) {
                                if (($dt->currency != "USD") && ($dt->currency != "EUR")) {?>
                            <option value="<?= $dt->currency ?>"><?= $dt->currency ?></option>
                            <?php } }?>
                        </select>
                    </th>
                    <th>Top up</th>
                    <th>Wallet to wallet receive</th>
                    <th>Wallet to wallet send</th>
                    <th>Wallet to bank</th>
                    <th>Buy crypto</th>
                    <th>Sell crypto</th>
                </tr>
                <tr>
                    <td>Referral earning</td>
                    <td id="tu"></td>
                    <td id="wtwr"></td>
                    <td id="wtws"></td>
                    <td id="wtb"></td>
                    <td>Soon!</td>
                    <td>Soon!</td>
                </tr>
            </table>
        </div>
    </div>
</div>