<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receive extends CI_Controller
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
        /*$currency = $_SESSION["currency"];
        $url = URLAPI. "/v1/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        print_r();
        if ($result->code != 200) {
            $body["bank"] = NULL;
        } else {
            $body["bank"] = $result->message;
        }
*/
        $data['title'] = NAMETITLE . " - Add Receive";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-top', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/topup/receive');
        $this->load->view('tamplate/footer');
    }

    public function localbank()
    {
        $currency = $_SESSION["currency"];
        $url = URLAPI . "/v1/trackless/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        if ($result->code != 200) {
            $bank = NULL;
        } else {
            $bank = $result->message;
        }

        $body["currency"] = $currency;
        $data['title'] = NAMETITLE . " - Add Receive";

    
		$vdata = array(
            'title'     => NAMETITLE . ' - Add Receive',
            'content'   => 'member/topup/localbank_input',
			'currency'  => $currency,
            'bank'      => $bank
        );

        $this->load->view('tamplate/navbar-top');
        $this->load->view('tamplate/wrapper', $vdata);
    }

    public function localbank_confirm()
    {
        $_POST["amount"]=str_replace(",","",$_POST["amount"]);
        $_POST["confirm_amount"]=str_replace(",","",$_POST["confirm_amount"]);

        $this->form_validation->set_rules('amount', 'Amount', 'trim|required');
        $this->form_validation->set_rules('confirm_amount', 'Confirm Amount', 'trim|required|matches[amount]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', "<p style='color:black'>" . validation_errors() . "</p>");
            redirect("receive/localbank");
            return;
        }

        $input              = $this->input;
        $amount             = $this->security->xss_clean($input->post("amount"));
        $bankminimum             = $this->security->xss_clean($input->post("bankminimum"));


        if($amount < $bankminimum){
            $this->session->set_flashdata('failed', "<p style='color:black'>Minumum Topup is: ".$bankminimum ." ". $_SESSION['currency'] ." </p>");
            redirect("receive/localbank");
            return;
        }
        // $is_topup           = apitrackless(URLAPI . "/v1/member/wallet/is_topup?currency=".$_SESSION["currency"]."&userid=".$_SESSION["user_id"])->message;
        // if (empty($is_topup)){
        //     if ($amount<35){
        //         $this->session->set_flashdata('failed',"Minimum topup for first time is 35 EUR");
        //         redirect("receive/localbank");
        //     }
        // }
        $infolist = array(
            'amount'         => $amount,
        );

            
		$vdata = array(
            'title'     => NAMETITLE . ' - Top up Confirmation',
            'content'   => 'member/topup/localbank_confirm',
			'data'      => $infolist,
        );

        $this->load->view('tamplate/navbar-top');
        $this->load->view('tamplate/wrapper', $vdata);
    }

    public function localbank_notif()
    {
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', "<p style='color:black'>" . validation_errors() . "</p>");
            redirect("receive/localbank");
            return;
        }

        $input              = $this->input;
        $amount             = $this->security->xss_clean($input->post("amount"));
        
        $mdata = array(
            'userid'        => $_SESSION["user_id"],
            'amount'        => $amount,
            'currency'      => $_SESSION["currency"],
            'transfer_type' => 'topup circuit'
        );

        $result = apitrackless(URLAPI . "/v1/member/wallet/topup", json_encode($mdata));
        
        if (@$result->code != "200") {
            $this->session->set_flashdata('failed', $result->message);
            redirect("receive/localbank");
            return;
        }

        $vdata = array(
            'title'     => NAMETITLE . ' - Top Up Process',
            'content'   => 'member/topup/localbank_notif',
			'data'      => $result->message,
            'amount'    => $amount
        );

        $this->load->view('tamplate/navbar-top');
        $this->load->view('tamplate/wrapper', $vdata);

    }

    public function interbank()
    {
        if (@$_GET['currency'] == '') {
            $currency = $_SESSION["currency"];
        } else {
            $currency = $_GET['currency'];
        }
        $url = URLAPI . "/v1/trackless/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        if ($result->code != 200) {
            $bank = NULL;
        } else {
            $bank = $result->message;
        }

        // $data['title'] = NAMETITLE . " - Add Receive";

        // $this->load->view('tamplate/header', $data);
        // $this->load->view('member/topup/interbank', $body);
        // $this->load->view('tamplate/footer');

        $vdata = array(
            'title'     => NAMETITLE . ' - Add Receive',
            'content'   => 'member/topup/interbank_input',
			'currency'  => $currency,
            'bank'      => $bank
        );

        $this->load->view('tamplate/navbar-top');
        $this->load->view('tamplate/wrapper', $vdata);
    }

    public function interbank_confirm()
    {
        $_POST["amount"]=str_replace(",","",$_POST["amount"]);
        $_POST["confirm_amount"]=str_replace(",","",$_POST["confirm_amount"]);

        $this->form_validation->set_rules('amount', 'Amount', 'trim|required');
        $this->form_validation->set_rules('confirm_amount', 'Confirm Amount', 'trim|required|matches[amount]');
        $this->form_validation->set_rules('currency', 'Currency', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', "<p style='color:black'>" . validation_errors() . "</p>");
            redirect("receive/interbank");
            return;
        }

        $input              = $this->input;
        $amount             = $this->security->xss_clean($input->post("amount"));
        $bankminimum             = $this->security->xss_clean($input->post("bankminimum"));
        $currency             = $this->security->xss_clean($input->post("currency"));


        if($amount < $bankminimum){
            $this->session->set_flashdata('failed', "<p style='color:black'>Minumum Topup is: ".$bankminimum ." ". $_SESSION['currency'] ." </p>");
            redirect("receive/interbank");
            return;
        }
        $infolist = array(
            'amount'         => $amount,
            'currency'       => $currency
        );

            
		$vdata = array(
            'title'     => NAMETITLE . ' - Top up Confirmation',
            'content'   => 'member/topup/interbank_confirm',
			'data'      => $infolist,
        );

        $this->load->view('tamplate/navbar-top');
        $this->load->view('tamplate/wrapper', $vdata);
    }

    public function interbank_notif()
    {
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('currency', 'Currency', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', "<p style='color:black'>" . validation_errors() . "</p>");
            redirect("receive/interbank");
            return;
        }

        $input              = $this->input;
        $amount             = $this->security->xss_clean($input->post("amount"));
        $currency             = $this->security->xss_clean($input->post("currency"));
        
        $mdata = array(
            'userid'        => $_SESSION["user_id"],
            'amount'        => $amount,
            'currency'      => $_SESSION["currency"],
            'transfer_type' => 'topup outside'
        );

        $result = apitrackless(URLAPI . "/v1/member/wallet/topup", json_encode($mdata));
        
        if (@$result->code != "200") {
            $this->session->set_flashdata('failed', $result->message);
            redirect("receive/interbank");
            return;
        }

        $vdata = array(
            'title'     => NAMETITLE . ' - Top Up Process',
            'content'   => 'member/topup/interbank_notif',
			'data'      => $result->message,
            'amount'    => $amount
        );

        $this->load->view('tamplate/navbar-top');
        $this->load->view('tamplate/wrapper', $vdata);
    }

    public function cash()
    {
        $currency = $_SESSION["currency"];
        $url = URLAPI . "/v1/trackless/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        if ($result->code != 200) {
            $body["bank"] = NULL;
        } else {
            $body["bank"] = $result->message;
        }

        $data['title'] = NAMETITLE . " - Add Receive";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/topup/cash', $body);
        $this->load->view('tamplate/footer');
    }
}