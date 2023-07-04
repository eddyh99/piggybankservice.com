<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topup_crypto extends CI_Controller
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
            "title"         => NAMETITLE . " - Topup Crypto",
            "content"       => "member/topup_crypto/index",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function confirm_topup()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Topup Crypto",
            "content"       => "member/topup_crypto/topup-confirm",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }
}