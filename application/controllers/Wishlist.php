<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

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
        $data['products'] = $this->MProduct->getRows_Wishlist($this->session->userdata('CustomerID'));

        // Load the product list view
        $this->load->view('Customer/tr_order/wishlist/index', $data);
    }

    function removeFromWishlist($id) {
        $this->MProduct->removeWishlist($this->session->userdata('CustomerID'), $id);
        $data['products'] = $this->MProduct->getRows_Wishlist($this->session->userdata('CustomerID'));

        $this->load->view('Customer/tr_order/wishlist/index', $data);
    }

}
