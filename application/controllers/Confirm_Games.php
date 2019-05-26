<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Confirm_Games extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('download');
        $this->load->library('session');

        $this->load->model('MConfirm_Games');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
//        if ($this->session->userdata('logged_in') !== TRUE) {
//            redirect('login');
//        }
    }

    // awal tampil index
    public function index() {
        $data['qgames'] = $this->MConfirm_Games->get_allgames();
        $data['master'] = 'Games';
        $this->load->view('Staff/ADMIN/confirm_Games/view', $data);
    }
     public function index_history() {
        $data['qgames'] = $this->MConfirm_Games->get_allgames();
        $data['master'] = 'Games';
        $this->load->view('Staff/ADMIN/confirm_Games/history', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller
        $GamesID = $this->MConfirm_Games->get_new_id();
        $DeveloperID = $this->session->userdata('StaffID');


        if ($mau_ke == "detail") {
            $data['qdata'] = $this->MConfirm_Games->get_games_byid($idu);
            $data['qgenre'] = $this->MConfirm_Games->get_genre_byid($idu);
            $data['qfoto'] = $this->MConfirm_Games->get_allimages($idu);


            $data['master'] = 'Games';
            $data['title'] = 'Detail Games';
            $this->load->view('Staff/ADMIN/confirm_Games/Detail', $data);
        } elseif ($mau_ke == "detail_admin") {
            $data['qdata'] = $this->MConfirm_Games->get_games_byid($idu);
            $data['qgenre'] = $this->MConfirm_Games->get_genre_byid($idu);

            $data['master'] = 'Games';
            $data['title'] = 'Detail Games';
            $this->load->view('Staff/ADMIN/confirm_Games/Detail', $data);
        } elseif ($mau_ke == "accept") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'GamesStatusVerif' => 1,
                'GamesStatusActive' => 1
            );

            $this->MConfirm_Games->get_update($idu, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('Confirm_Games');
        } elseif ($mau_ke == "reject") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'GamesStatusVerif' => 2,
            );

            $this->MConfirm_Games->get_update($idu, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('Confirm_Games');
        }
    }

    public function hapus($id) {
        //$this->MConfirm_Games->del_games($id);
        $data = array(
            'GamesStatusActive' => '0'
        );
        $this->MConfirm_Games->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('games');
    }

    public function aktif($id) {
        //$this->MConfirm_Games->del_games($id);
        $data = array(
            'GamesStatusActive' => '1'
        );
        $this->MConfirm_Games->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('games');
    }

    public function download() {

        $idu = $this->uri->segment(4);

        $path_download = addslashes($this->input->post($idu));
        force_download('Developer/Games/' . $path_download, NULL);
    }

}

?>