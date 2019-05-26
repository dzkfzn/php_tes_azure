<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MCustomer');
        $this->load->helper(array('url','form'));
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        
    }

    

    // awal tampil index
    public function index() {
        $data['qcustomer'] = $this->MCustomer->get_allcustomer();
        $data['master'] = 'Customer';
        $this->load->view('Staff/ADMIN/ms_Customer/View', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $id = addslashes($this->input->post('CustomerID'));
        $nama = addslashes($this->input->post('CustomerName'));
        $email = addslashes($this->input->post('CustomerEmail'));
        $username = addslashes($this->input->post('CustomerUsername'));
        $password = addslashes($this->input->post('CustomerPassword'));
        $birthdate = addslashes($this->input->post('CustomerBirthDate'));
        $wallet = addslashes($this->input->post('CustomerWallet'));
        $path = addslashes($this->input->post('CustomerImagePath'));
        $status = addslashes($this->input->post('CustomerStatusActive'));

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Customer';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Staff/ADMIN/ms_Customer/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MCustomer->get_customer_byid($idu);
            $data['title'] = 'Edit Customer';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/ADMIN/ms_Customer/Add', $data);
        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
                'CustomerID' => $id,
                'CustomerName' => $nama,
                'CustomerStatusActive' => '1',
                'RoleID' => '4',
                'CustomerWallet' => $wallet,
                'CustomerBirthDate' => $birthdate,
                'CustomerEmail' => $email,
                'CustomerUsername' => $username,
                'CustomerPassword' => $password,
                'CustomerImagePath' => $path,

            );

            $this->MCustomer->get_insert($data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Customer');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'CustomerID' => $id,
                'CustomerName' => $nama,
                'CustomerWallet' => $wallet,
                'CustomerBirthDate' => $birthdate,
                'CustomerEmail' => $email,
                'CustomerUsername' => $username,
                'CustomerPassword' => $password,
                'CustomerImagePath' => $path,
            );

            $this->MCustomer->get_update($id, $data);

            redirect('Customer');
        }
    }

    // fungsi hapus customer
    public function hapus($id) {
        //$this->MCustomer->del_customer($id);
        $data = array(
            'CustomerStatusActive' => '0'
        );
        $this->MCustomer->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('customer');
    }

    public function aktif($id) {
        //$this->MCustomer->del_customer($id);
        $data = array(
            'CustomerStatusActive' => '1'
        );
        $this->MCustomer->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('customer');
    }

}

?>