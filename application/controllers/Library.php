<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        // Load cart library
        $this->load->library('cart');
        // Load product model
        $this->load->model('MProduct');
//        
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login_user');
        }
    }

    function index() {

        // Fetch products from the database
        $data['products'] = $this->MProduct->getRows_Library($this->session->userdata('CustomerID'));

        // Load the product list view
        $this->load->view('Customer/tr_order/library/index', $data);
    }

}
