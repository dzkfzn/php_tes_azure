<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Change_Identity extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MStaff');
        $this->load->model('MUbahProfil');
        $this->load->model('dropdown');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

//        if ($this->session->userdata('logged_in') !== TRUE) {
//            redirect('login');
    }

    // awal tampil index
    public function index() {
        $data['master'] = 'MUbahProfil';
        $data['title'] = 'Add Staff';
        $data['aksi'] = 'aksi_add';
        $data['master'] = 'Staff';
        $data['LoginStaffName'] = $this->session->userdata('StaffName');
        $data['LoginStaffID'] = $this->session->userdata('StaffID');
        //data ddl
        $data['provinces'] = $this->dropdown->getProvinceRows();
        $data['qstaff'] = $this->MStaff->get_allstaff($this->session->userdata('StaffID'));

        $this->load->view('Staff/SUPER_ADMIN/ms_Staff/view', $data);
    }
    public function getdata(){
        $data['qdata'] = $this->MUbahProfil->get_data_staff($this->session->userdata('StaffID'));
          
        $this->load->view('Staff/ADMIN/UbahProfil', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        $id = addslashes($this->input->post('StaffID'));
        $password = addslashes($this->input->post('StaffID'));
        
        $address = addslashes($this->input->post('StaffAddress'));
        $phone = addslashes($this->input->post('StaffPhoneNum'));
        

        $StaffAddress = strtoupper(addslashes($this->input->post('StaffAddress')));

        $StaffProvince = addslashes($this->input->post('StaffProvince'));
        $StaffRegency = addslashes($this->input->post('StaffRegency'));
        $StaffDistrict = addslashes($this->input->post('StaffDistrict'));
        $StaffVillage = addslashes($this->input->post('StaffVillage'));
        $StaffZipCode = addslashes($this->input->post('StaffZipCode'));
        $StaffImage = addslashes($this->input->post('StaffImage'));


      if ($mau_ke == "editStaff") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update

            if ($_FILES['StaffImage']['size'] == 0) {
                $data = array(
                    'StaffID' => $id,
                    'StaffPhoneNum' => $phone,
                    'StaffAddress' => $StaffAddress,
                    'StaffZipCode' => $StaffZipCode
                );
            } else {
                $pict = $this->aksi_upload($id, $name);

                $data = array(
                    'StaffID' => $id,
                    'RoleID' => $id_role,
                    'StaffPhoneNum' => $phone,
                    'StaffAddress' => $StaffAddress,
                    'StaffZipCode' => $StaffZipCode,
                    'StaffPicture' => $pict,
                );
            }




            $this->MUbahProfil->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('staff');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'StaffID' => $id,
                'RoleID' => $id_role,
                'StaffName' => $name,
                'StaffEmail' => $email,
                'StaffUsername' => $username,
                'StaffPassword' => md5($password),
                'StaffAddress' => $address,
                'StaffPhoneNum' => $phone,
            );


            $this->MStaff->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('staff');
        }
    }

 
    public function aksi_upload($StaffID, $StaffName) {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $StaffID . "-" . $StaffName;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('StaffImage')) {
            $foto = $this->upload->data();
            return $foto['file_name'];
        } else {
            return "default.jpg";
        }
    }

    //DDL
    public function getRegencies() {
        $regencies = array();
        $province_id = $this->input->post('province_id');
        if ($province_id) {
            $con['conditions'] = array('province_id' => $province_id);
            $regencies = $this->dropdown->getRegencyRows($con);
        }
        echo json_encode($regencies);
    }

    public function getDistricts() {
        $districts = array();
        $regency_id = $this->input->post('regency_id');
        if ($regency_id) {
            $con['conditions'] = array('regency_id' => $regency_id);
            $districts = $this->dropdown->getDistrictRows($con);
        }
        echo json_encode($districts);
    }

    public function getVillages() {
        $villages = array();
        $district_id = $this->input->post('district_id');
        if ($district_id) {
            $con['conditions'] = array('district_id' => $district_id);
            $villages = $this->dropdown->getVillageRows($con);
        }
        echo json_encode($villages);
    }
}
?>
