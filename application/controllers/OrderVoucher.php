
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OrderVoucher extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MOrderVoucher');
        $this->load->model('MProduct');
        $this->load->helper(array('form', 'url'));
        // if ($this->session->userdata('logged_in') !== TRUE) {
        //     redirect('login');
        // }
    }

    // awal tampil index
    public function index() {
        // $data['qorder'] = $this->MKonfirmasiOrder->get_allorder();

        $this->load->view('Customer/tr_voucher/index');
    }

    public function insert() {
        //$this->MBank->del_bank($id);
        $label = addslashes($this->input->post('VoucherLabel'));

        $data = array();
        $datacek = array();



        foreach ($this->MOrderVoucher->get_voucher_byid($label) as $key => $val) {
            $idvoucher = $val->VoucherID;

            $gamesID = $val->GamesID;
            $ExpDate = $val->VoucherExpireDate;
            $status = $val->VoucherStatusActive;
            $DevID = $val->DeveloperID;
        }


        $exp = new DateTime($ExpDate);
        $today = new DateTime();
        $customerID = $this->session->userdata('CustomerID');

        if ($this->MOrderVoucher->get_available_game($gamesID, $customerID) == false) {
            $idgm = false;
        } else {
            $idgm = true;
        }

        //       foreach ($this->MOrderVoucher->get_available_game($gamesID, $customerID) as $key => $c) {
        //            $idgm = $c->GamesID;
        // }
        //mengecek status voucher
        if ($status == null) {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Your Vocuheris Invalid</div>");
            redirect('OrderVoucher');
        } else
        if ($status == 0) {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Your Voucher Inserted Not Active $status</div>");
            redirect('OrderVoucher');
        } else if ($status == 2) {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Your Vocuher Inserted ALready Used  </div>");
            redirect('OrderVoucher');
        } else if ($today > $exp) {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Your voucher inserted has been expired</div>");
            redirect('OrderVoucher');
        } else if ($idgm == true) {
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Games already exists in your library </div>");
            redirect('OrderVoucher');
        } else {
            $datalib = array(
//                'BankID' => $id,
                'GamesID' => $gamesID,
                'CustomerID' => $this->session->userdata('CustomerID')
            );

            $data2 = array(
                'VoucherStatusActive' => '2',
                'VoucherUsedBy' => $this->session->userdata('CustomerID')
            );
            $idord = $this->MProduct->get_new_id();

            $data3 = array(
                'OrderID' => $idord,
                'CustomerID' => $this->session->userdata('CustomerID'),
                // 'OrderDate' => $today,
                'OrderIsVoucher' => "1",
                'OrderStatusActive' => "1",
                'DeveloperID' => $DevID
            );

            $this->MOrderVoucher->get_update_voucher($idvoucher, $data2);
            $this->MOrderVoucher->get_insert_library($datalib);
            $this->MOrderVoucher->get_insert_order($data3);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Games success inserted to library </div>");
            redirect('OrderVoucher');
        }
    }

}

?>