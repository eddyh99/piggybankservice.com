<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transfer_crypto extends CI_Controller
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
            "title"         => NAMETITLE . " - Transfer Crypto",
            "content"       => "member/transfer_crypto/index",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function send_crypto()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Transfer Crypto",
            "content"       => "member/transfer_crypto/send/send-crypto",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function confirmsend_crypto()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Transfer Crypto",
            "content"       => "member/transfer_crypto/send/confirm-send-crypto",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function request_crypto()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Request Crypto",
            "content"       => "member/transfer_crypto/request/request-crypto",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function requestorder_crypto()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Request Crypto",
            "content"       => "member/transfer_crypto/request/request-order-crypto",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function receive_crypto()
    {

        $mdata=array(
            "title"         => NAMETITLE . " - Request Crypto",
            "content"       => "member/transfer_crypto/receive/receive-crypto",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

}