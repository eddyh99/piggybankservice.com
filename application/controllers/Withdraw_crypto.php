<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Withdraw_crypto extends CI_Controller
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
            "title"         => NAMETITLE . " - Withdraw Crypto",
            "content"       => "member/withdraw_crypto/index",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function confirm_withdraw()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Withdraw Crypto",
            "content"       => "member/withdraw_crypto/withdraw-confirm",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function notif_withdraw()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Withdraw Crypto",
            "content"       => "member/withdraw_crypto/withdraw-notif",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }
}