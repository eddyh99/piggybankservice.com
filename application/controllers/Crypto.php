<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crypto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url('/'));
        }
    }

    public function index()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Crypto",
            "content"       => "member/crypto",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function setting_currency()
    {

        $user_id = array(
            "userid" => $_SESSION["user_id"]
        );

        $url = URLAPI . "/v1/member/currency/getActiveCurrency";
        $result_currency = apitrackless($url, json_encode($user_id))->message;

        $mdata = array(
            "title"     => NAMETITLE . " - Currency Setting",
            "content"   => 'member/setting-currency-crypto',
            "extra"     => 'member/js/js_currency',
            "currency"  => $result_currency,
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }
}