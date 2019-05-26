<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Load cart library
        $this->load->library('cart');

        // Load product model
        $this->load->model('MProduct');
    }

    function index() {
        $data = array();

        // Fetch products from the database
        $data['products'] = $this->MProduct->getRows();
        $data['cartItems'] = $this->cart->contents();
        $data['controller'] = $this;
        // Load the product list view
        $this->load->view('Customer/tr_order/products/index', $data);
    }

    function getGenreByID($id) {
        $this->load->model('MGames');
        $data['qgenre'] = $this->MGames->get_genre_byid($id);
    }

    function addToCart($proID) {


        $message = false;
        // Fetch specific product by ID
        $product = $this->MProduct->getRowsObj($proID);



        $check = $this->MProduct->checkIsCustomerHaveGames($proID, $this->session->userdata('CustomerID'));
        if ($check) {
            $message = true;
        } 
        // Add product to the cart
        $data = array(
        'id' => $product['GamesID'],
        'qty' => 1,
        'price' => $product['GamesPrice'],
        'name' => $product['GamesName'],
        'image' => $product['GamesThumbnail'],
        'verif' => $message
        );
        $isit = $this->cart->insert($data);
        redirect('products/');
        // Redirect to the cart page
    }

}
