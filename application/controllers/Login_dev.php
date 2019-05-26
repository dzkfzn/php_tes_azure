<?php

class Login_dev extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login_devModel');
        $this->load->helper(array('url'));
        $this->load->library('session');
    }

    function index() {
        $this->load->view('Developer/login/login_dev');
    }

    function auth() {
        $username = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $validate = $this->Login_devModel->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            $username = $data['DeveloperUsername'];
            $id_role = $data['RoleID'];
            $nama_role = $data['RoleName'];
            $id = $data['DeveloperID'];
            $name = $data['DeveloperName'];
            $sesdata = array(
                'DeveloperName' => $name,
                'DeveloperUsername' => $username,
                'RoleID' => $id_role,
                'RoleName' => $nama_role,
                'DeveloperID' => $id,
                'logged_in' => TRUE,
                'LoginDeveloperName' => $name
            );
            $this->session->set_userdata($sesdata);
//            $this->session->sess_expiration = '1';
            $this->session->set_tempdata($sesdata, NULL, 3600);


            redirect('page/developer');
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
