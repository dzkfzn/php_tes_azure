<?php

class Login_user extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('LoginModelUser');
        $this->load->helper(array('url'));
        $this->load->library('session');
        $this->load->library('google');
    }

    function index() {
        $data['google_login_url'] = $this->google->get_login_url();

        $this->load->view('user/login/login', $data);
    }

    function cart() {

        $this->load->view('Customer/tr_order/checkout/2 bayar wallet');
    }

    function auth() {
        $email = $this->input->post('Email');
        $password = $this->input->post('pass');
        $validate = $this->LoginModelUser->validate($email, $password);
        if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            $username = $data['CustomerUsername'];
            $id = $data['CustomerID'];
            $name = $data['CustomerName'];
            $email = $data['CustomerEmail'];
            $CustomerImagePath = $data['CustomerImagePath'];
            $money = $data['CustomerWallet'];
            $sesdata = array(
                'CustomerName' => $name,
                'CustomerWallet' => $money,
                'CustomerUsername' => $username,
                'CustomerImagePath' => $CustomerImagePath,
                'CustomerID' => $id,
                'CustomerEmail' => $email,
                'logged_in' => TRUE,
                'LoginCustomerName' => $name
            );
            $this->session->set_userdata($sesdata);
//            $this->session->sess_expiration = '1';
            $this->session->set_tempdata($sesdata, NULL, 3600);



            redirect('Products');
        }
        $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");
        redirect('Login_user');
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
        redirect('Products');
    }

}
