<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Swap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );

        $url = URLAPI . "/v1/trackless/currency/getAllCurrency";
        $body["currency"]   = apitrackless($url, json_encode($mdata))->message;

        $data = array(
            "title"     => NAMETITLE . " - Swap",
            "content"   => "admin/swap/swap",
            "mn_swap"    => "active",
            "extra"     => "admin/swap/js/js_swap",
            "currency"     => $body["currency"],
        );

        $this->load->view('admin_template/wrapper2', $data);
    }

    public function swapcalculate()
    {
        $a = $this->input->post("amount");
        $b = preg_replace('/,(?=[\d,]*\.\d{2}\b)/', '', $a);
        $_POST["amount"]=$b;
        
        $this->form_validation->set_rules('toswap', 'Currency Target', 'trim|required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            header("HTTP/1.1 500 Internal Server Error");
            $error = array(
                "token"     => $this->security->get_csrf_hash(),
                "message"   => validation_errors()
            );
            echo json_encode($error);
            return;
        }

        $input        = $this->input;
        $target        = $this->security->xss_clean($input->post("toswap"));
        $amount        = $this->security->xss_clean($input->post("amount"));

        if ($amount > 0) {
            $mdata  = array(
                "source"    => $_SESSION["currency"],
                "target"    => $target,
                "amount"    => $amount
            );
            $result = apitrackless(URLAPI . "/v1/admin/swap/swap_summary", json_encode($mdata));
            if (@$result->code != 200) {
                header("HTTP/1.1 500 Internal Server Error");
                $error = array(
                    "token"     => $this->security->get_csrf_hash(),
                    "message"   => $result->message
                );
                echo json_encode($error);
                return;
            }

            $data = array(
                "quoteid"   => $result->message->quoteid,
                "token"     => $this->security->get_csrf_hash(),
                "receive"   => $result->message->receive
            );
            echo json_encode($data);
        } else {
            header("HTTP/1.1 500 Internal Server Error");
            $error = array(
                "token"     => $this->security->get_csrf_hash(),
                "message"   => "Amount swap can't be negative"
            );
            echo json_encode($error);
            return;
        }
    }

    public function confirm()
    {
        $amount = $this->input->post("amount");
        $new_amount = preg_replace('/,(?=[\d,]*\.\d{2}\b)/', '', $amount);
        $_POST["amount"]=$new_amount;

        $amountget = $this->input->post("amountget");
        $new_amountget = preg_replace('/,(?=[\d,]*\.\d{2}\b)/', '', $amountget);
        $_POST["amountget"]=$new_amountget;
        
        $this->form_validation->set_rules('toswap', 'Currency Target', 'trim|required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('quoteid', 'quoteid', 'trim|required');
        $this->form_validation->set_rules('amountget', 'Amount Get', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect('admin/swap');
        }

        $input    = $this->input;
        $target = $this->security->xss_clean($input->post("toswap"));
        $data = array(
            "target"    => $target,
            "amount"    => $this->security->xss_clean($input->post("amount")),
            "quoteid"   => $this->security->xss_clean($input->post("quoteid")),
            "amountget" => $this->security->xss_clean($input->post("amountget")),
            "symbol"    => apitrackless(URLAPI . "/v1/trackless/currency/getsymbol?currency=" . $target)->message
        );

        $data = array(
            "title"     => NAMETITLE . " - Swap",
            "content"   => "admin/swap/swap-confirm",
            "mn_swap"    => "active",
            "extra"     => "admin/swap/js/js_swap",
            "data"     => $data,
        );

        $this->load->view('admin_template/wrapper2', $data);
    }

    public function notif()
    {
        $this->form_validation->set_rules('toswap', 'Currency Target', 'trim|required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('quoteid', 'quoteid', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect('admin/swap');
        }

        $input    = $this->input;
        $target = $this->security->xss_clean($input->post("toswap"));
        $amount = $this->security->xss_clean($input->post("amount"));
        $quoteid = $this->security->xss_clean($input->post("quoteid"));

        if ($amount > 0) {
            $mdata = array(
                "userid"    => $_SESSION["user_id"],
                "source"    => $_SESSION["currency"],
                "target"    => $target,
                "amount"    => $amount,
                "quoteid"   => $quoteid,
            );

            $result = apitrackless(URLAPI . "/v1/admin/swap/swapProcess", json_encode($mdata));
            if (@$result->code != 200) {
                $this->session->set_flashdata("failed", $result->message);
                redirect('admin/swap');
            }

            $datatc = array(
                "amount"    => $amount,
                "amountget" => $result->message->receive,
                // "symbol"    => apitrackless(URLAPI . "/v1/admin/currency/getsymbol?currency=" . $target)->message
            );

            $data = array(
                "title"     => NAMETITLE . " - Swap",
                "content"   => "admin/swap/swap-notif",
                "mn_swap"    => "active",
                "extra"     => "admin/swap/js/js_swap",
                "data"     => $datatc,
            );

            $this->load->view('admin_template/wrapper2', $data);
        }
    }
}