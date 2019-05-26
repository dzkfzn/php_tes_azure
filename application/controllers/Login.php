<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->helper(array('url'));
        $this->load->library('session');
    }

    function index() {
        $this->load->view('Staff/login/login');
    }

    function auth() {
        $username = $this->input->post('username');

        $passwordDev = ($this->input->post('password'));
        $password = md5($this->input->post('password'));

        $isDeveloper = $this->LoginModel->validateISDev($username, $passwordDev);
        $validate = $this->LoginModel->validate($username, $password);
        if ($isDeveloper->num_rows() > 0) {
            $data = $isDeveloper->row_array();
            $username = $data['DeveloperUsername'];
            $nama_role = "Developer";
            $id = $data['DeveloperID'];
            $name = $data['DeveloperName'];
            $sesdata = array(
                'StaffName' => $name,
                'StaffUsername' => $username,
                'RoleName' => $nama_role,
                'StaffID' => $id,
                'logged_in' => TRUE,
                'LoginStaffName' => $name
            );


            $this->session->set_userdata($sesdata);
//            $this->session->sess_expiration = '1';
            $this->session->set_tempdata($sesdata, NULL, 3600);
            redirect('page/developer');
        } else if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            $username = $data['StaffUsername'];
            $id_role = $data['RoleID'];
            $nama_role = $data['RoleName'];
            $id = $data['StaffID'];
            $name = $data['StaffName'];
            $sesdata = array(
                'StaffName' => $name,
                'StaffUsername' => $username,
                'RoleID' => $id_role,
                'RoleName' => $nama_role,
                'StaffID' => $id,
                'logged_in' => TRUE,
                'LoginStaffName' => $name
            );
            $this->session->set_userdata($sesdata);
//            $this->session->sess_expiration = '1';
            $this->session->set_tempdata($sesdata, NULL, 3600);

            if ($id_role == '1') {
                redirect('page/admin');
            } elseif ($id_role == '2') {
                redirect('page/finance');
            } elseif ($id_role == '3') {
                redirect('page/super_admin');
            } elseif ($id_role == '4') {
                redirect('page/manager');
            } elseif ($id_role == '5') {
                $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");
                redirect('login');
            }
        } else {
//            echo $this->session->set_flashdata('msg', '');
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");

            redirect('login');
        }
    }

    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);
    }

    public function resolve_user_login($username, $password) {

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
