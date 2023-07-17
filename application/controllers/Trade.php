<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trade extends CI_Controller
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
            "title"         => NAMETITLE . " - Trade Crypto",
            "content"       => "member/trade/index",
            "extra"         => "member/js/js_index"
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function transaction()
    {

        $transaction = base64_decode($_GET['transaction']);

        $mdata=array(
            "title"         => NAMETITLE . " - Transaction Crypto",
            "content"       => "member/trade/transaction",
            "extra"         => "member/js/js_index",
            "transaction"   => $transaction,
        );

        $this->load->view('tamplate/wrapper', $mdata);
    }


    public function send()
    {
        
        $mdata=array(
            "title"         => NAMETITLE . " - Send Crypto",
            "content"       => "member/trade/send-trade",
            "extra"         => "member/js/js_index",
        );
        
        $this->load->view('tamplate/wrapper', $mdata);
    }


    public function send_confirm()
    {
        
        $mdata=array(
            "title"         => NAMETITLE . " - Confirmation Crypto",
            "content"       => "member/trade/confirm-send-trade",
            "extra"         => "member/js/js_index",
        );
        
        $this->load->view('tamplate/wrapper', $mdata);
    }

    
    public function send_notif()
    {
        
        $mdata=array(
            "title"         => NAMETITLE . " - Notification Crypto",
            "content"       => "member/trade/send-notif",
            "extra"         => "member/js/js_index",
        );
        
        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function request()
    {
        
        $mdata=array(
            "title"         => NAMETITLE . " - Request Crypto",
            "content"       => "member/trade/request",
            "extra"         => "member/js/js_index",
        );
        
        $this->load->view('tamplate/wrapper', $mdata);
    }

    public function receive()
    {
        
        $mdata=array(
            "title"         => NAMETITLE . " - Receive Crypto",
            "content"       => "member/trade/receive",
            "extra"         => "member/js/js_index",
        );
        
        $this->load->view('tamplate/wrapper', $mdata);
    }
    




}