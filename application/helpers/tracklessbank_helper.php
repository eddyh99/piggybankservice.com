<?php
function apitrackless($url, $postData = NULL)
{
    $token = "VwRKnXjI7yQCn3mNBw0Kur3VhVtCZwJA90OE72YElFEpStHbor";

    $ch     = curl_init($url);
    $headers    = array(
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json'
    );

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}

function balance($userid, $currency)
{
    $balance = apitrackless(
        URLAPI . "/v1/member/wallet/getBalance?currency=" . $currency . "&userid=" . $userid
    )->message->balance;
    return $balance;
}

function balanceadmin($currency)
{
    $balance = apitrackless(
        URLAPI . "/v1/admin/wallet/balance_ByCurrency?currency=" . $currency
    )->message->balance;
    return $balance;
}

function rounddown($balance){
    return floor($balance*100)/100;
}

function max_sendtowallet($balance,$currency){
    $mfee = apitrackless(URLAPI . "/v1/admin/fee/getFee?currency=" . $currency);
    $fxd = $mfee->message->wallet_sender_fxd;
    $pct = $mfee->message->wallet_sender_pct;
    
    $return = $balance - (($balance * $pct) + $fxd);

    if ($return <= 0) {
        $return = 0;
    }

    return substr(number_format($return,4),0,-2);
    // return $return;
}