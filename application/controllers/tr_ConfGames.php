<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MGames');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
//        if ($this->session->userdata('logged_in') !== TRUE) {
//            redirect('login');
//        }
    }

    // awal tampil index
    public function index() {
        $data['qgames'] = $this->MGames->get_allgames();
        $data['master'] = 'Games';
        $this->load->view('Staff/DEVELOPER/ms_Games/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
    }

    public function aksi_upload($GamesID, $GamesName) {
        $config['upload_path'] = './Developer/Games/';
        $config['allowed_types'] = 'zip|rar';
        $config['file_name'] = $GamesID . "-" . $GamesName;
        $config['overwrite'] = true;
//        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('GamesPath')) {
            $foto = $this->upload->data();
            return $foto['file_name'];
        } else {
            return "default.jpg";
        }
    }

    public function hapus($id) {
        //$this->MGames->del_games($id);
        $data = array(
            'GamesStatusActive' => '0'
        );
        $this->MGames->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('games');
    }

    public function aktif($id) {
        //$this->MGames->del_games($id);
        $data = array(
            'GamesStatusActive' => '1'
        );
        $this->MGames->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");
        redirect('games');
    }

}

?>