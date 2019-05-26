<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Role extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MRole');
        $this->load->helper(array('form', 'url'));
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    // awal tampil index
    public function index() {
        $data['qrole'] = $this->MRole->get_allrole();
        $data['master'] = 'Role';
        $this->load->view('Staff/SUPER_ADMIN/ms_Role/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $id = addslashes($this->input->post('RoleID'));
        $nama = addslashes($this->input->post('RoleName'));
        $status = addslashes($this->input->post('RoleStatus'));

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Add Role';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Staff/SUPER_ADMIN/ms_Role/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MRole->get_role_byid($idu);
            $data['title'] = 'Edit Role';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/SUPER_ADMIN/ms_Role/Add', $data);
        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
                // 'RoleID' => $id,
                'RoleName' => $nama,
                'RoleStatus' => '1'
            );

            $this->MRole->get_insert($data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Role');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'RoleID' => $id,
                'RoleName' => $nama
            );

            $this->MRole->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('role');
        }
    }

    // fungsi hapus role
    public function hapus($id) {
        //$this->MRole->del_role($id);
        $data = array(
            'RoleStatus' => '0'
        );
        $this->MRole->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('role');
    }

    public function aktif($id) {
        //$this->MRole->del_role($id);
        $data = array(
            'RoleStatus' => '1'
        );
        $this->MRole->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('role');
    }

}

?>