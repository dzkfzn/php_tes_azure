<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voucher extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MVoucher');

        $this->load->helper(array('form', 'url'));
//        if ($this->session->userdata('logged_in') !== TRUE) {
        //          redirect('login');
        //    }
    }

    // awal tampil index
    public function index() {
        $data['qvoucher'] = $this->MVoucher->get_allvoucher();
        $data['master'] = 'Voucher';
        $this->load->view('staff/DEVELOPER/ms_Voucher/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller
        $id = addslashes($this->input->post('VoucherID'));
        $id_games = addslashes($this->input->post('GamesID'));
        $id_developer = addslashes($this->input->post('DeveloperID'));
        $usedBy = addslashes($this->input->post('VoucherUsedBy'));
        $Label = addslashes($this->input->post('VoucherLabel'));
        $ExpDate = date("Y-m-d", strtotime(addslashes($this->input->post('VoucherExpireDate'))));
        $status = addslashes($this->input->post('VoucherStatusActive'));
        $quantity = $status = addslashes($this->input->post('quantity'));


        if ($mau_ke == "add") {
            $data['title'] = 'Add Voucher';
            $data['aksi'] = 'aksi_add';
            $data['master'] = 'Voucher';
            $data['qgames'] = $this->MVoucher->get_allgames(($this->session->userdata('StaffID')));
            $data['qdeveloper'] = $this->MVoucher->get_alldeveloper();


            $this->load->view('staff/DEVELOPER/ms_Voucher/add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MVoucher->get_voucher_byid($idu);
            $data['qgames'] = $this->MVoucher->get_allgames();
            $data['qdeveloper'] = $this->MVoucher->get_alldeveloper();
            $data['master'] = 'Voucher';
            $data['title'] = 'Edit Voucher';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('staff/DEVELOPER/ms_Voucher/add', $data);
        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            for ($i = 0; $i < $quantity; $i++) {
                $idnew = $this->MVoucher->get_new_id();
                $data = new stdClass();
                $kode = $this->random();

                $data = array(
                    'VoucherID' => $idnew,
                    'GamesID' => $id_games,
                    'DeveloperID' => $this->session->userdata('StaffID'),
                    'VoucherLabel' => $kode,
                    'VoucherExpireDate' => $ExpDate,
                    'VoucherStatusActive' => 1
                );

                $this->MVoucher->get_insert($data);
            }
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Voucher');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'VoucherID' => $id,
                'GamesID' => $id_games,
                'DeveloperID' => $id_developer,
                'VoucherLabel' => $Label,
                'VoucherExpireDate' => $ExpDate
            );

            $this->MVoucher->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('voucher');
        }
    }

    // fungsi hapus staff
    public function hapus($id) {
        //$this->MVoucher->del_staff($id);
        $data = array(
            'VoucherStatusActive' => '0'
        );
        $this->MVoucher->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('voucher');
    }

    public function aktif($id) {
        //$this->MVoucher->del_staff($id);
        $data = array(
            'VoucherStatusActive' => '1'
        );
        $this->MVoucher->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('voucher');
    }

    public function random() {
        $length = 12;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

?>
