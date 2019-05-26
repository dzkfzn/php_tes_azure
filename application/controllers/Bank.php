<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bank extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MBank');
        $this->load->helper(array('form', 'url'));
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    // awal tampil index
    public function index() {
        $data['qbank'] = $this->MBank->get_allbank();
        $data['master'] = 'Bank';
        $this->load->view('Staff/FINANCE/ms_Bank/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $id = addslashes($this->input->post('BankID'));
        $nama = addslashes($this->input->post('BankName'));
        $status = addslashes($this->input->post('BankStatusActive'));
        $norek = addslashes($this->input->post('BankNoRek'));

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Bank';
            $data['master'] = 'Bank';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Staff/FINANCE/ms_Bank/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MBank->get_bank_byid($idu);
            $data['title'] = 'Edit Bank';
            $data['master'] = 'Bank';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/FINANCE/ms_Bank/Add', $data);
        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
//                'BankID' => $id,
                'BankName' => $nama,
                'BankStatusActive' => '1',
                'BankNoRek' => $norek
            );

            $this->MBank->get_insert($data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Bank');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'BankID' => $id,
                'BankName' => $nama,
                'BankNoRek' => $norek
            );

            $this->MBank->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('bank');
        }
    }

    // fungsi hapus bank
    public function hapus($id) {
        //$this->MBank->del_bank($id);
        $data = array(
            'BankStatusActive' => '0'
        );
        $this->MBank->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('bank');
    }

    public function aktif($id) {
        //$this->MBank->del_bank($id);
        $data = array(
            'BankStatusActive' => '1'
        );
        $this->MBank->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('bank');
    }

}

?>