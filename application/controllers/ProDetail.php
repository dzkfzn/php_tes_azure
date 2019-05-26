<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ProDetail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('cart');

        // Load product model
        $this->load->model('MProduct');
    }

    // awal tampil index
    public function index() {

//        $data['products'] = $this->MProduct->getProductByID();

        $this->load->view('Customer/tr_order/products/ProductDetail');
    }

    public function detailPro($idGames) {

//        $data['products'] = $this->MProduct->getProductByID();
        $data['detailPro'] = $this->MProduct->getRows($idGames);

//        $id = $data['detailPro'][0]['GamesID'];
        $data['qGenre'] = $this->MProduct->get_genre_byid($idGames);
        $data['qGambar'] = $this->MProduct->get_pict_byid($idGames);
        $data['qSystemReq'] = $this->MProduct->get_syReq_byid($idGames);


        $isWishlist = $this->MProduct->wishlist_exists($idGames, $this->session->userdata('CustomerID'));
        if ($isWishlist) {
            $this->session->set_userdata('IsWishlist', $isWishlist);
        } else {
            $this->session->set_userdata('IsWishlist', false);
        }

        $this->load->view('Customer/tr_order/products/ProductDetail', $data);
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
        $this->detailPro($proID);
        // Redirect to the cart page
    }

    function addToWishlist($proID) {


        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login_user');
        }

        $GamesID = $this->uri->segment(3);
        $CustomerID = $this->uri->segment(4);
        $data = array(
            'GamesID' => $GamesID,
            'CustomerID' => $CustomerID
        );

        $isSucces = $this->MProduct->get_insert_wishlist($data);
        $this->detailPro($GamesID);
    }

    function RemoveFromWishlist($proID) {


        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login_user');
        }

        $GamesID = $this->uri->segment(3);
        $CustomerID = $this->uri->segment(4);


        $isSucces = $this->MProduct->get_remove_wishlist($GamesID, $CustomerID);
        $this->detailPro($GamesID);
    }

}

?>