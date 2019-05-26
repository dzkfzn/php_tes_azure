<?php

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    function index() {
//Allowing akses to admin only
//        if ($this->session->userdata('RoleID') === '1') {
//            $this->load->view('Staff/ADMIN/dashboard');
//        } else {
        echo "Access Denied";
//        }
    }

    function admin() {
//Allowing akses to staff only
        if ($this->session->userdata('RoleID') === '1') {
//            $this->load->view('Staff/ADMIN/dashboard');
            redirect('Dashboard/Admin');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");

            redirect('login');
        }
    }

    function finance() {
//Allowing akses to staff only
        if ($this->session->userdata('RoleID') === '2') {
            redirect('Dashboard/finance');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");

            redirect('login');
        }
    }

    function super_admin() {
//Allowing akses to staff only
        if ($this->session->userdata('RoleID') === '3') {
            redirect('Dashboard/super_admin');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");

            redirect('login');
        }
    }

    function manager() {
//Allowing akses to staff only
        if ($this->session->userdata('RoleID') === '4') {
            redirect('Dashboard/manager');
        } else {
            $this->session->set_flashdata("true", "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Username or Password is Wrong </div>");

            redirect('login');
        }
    }

    function developer() {
//Allowing akses to staff only
        redirect('Dashboard/developer');
    }

}
