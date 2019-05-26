<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Genre extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MGenre');
        $this->load->helper(array('form', 'url'));
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    // awal tampil index
    public function index() {
        $data['qgenre'] = $this->MGenre->get_allgenre();
        $data['master'] = 'Genre';
        $this->load->view('Staff/ADMIN/ms_Genre/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $id = addslashes($this->input->post('GenreID'));
        $nama = addslashes($this->input->post('GenreName'));
        $status = addslashes($this->input->post('GenreStatus'));

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Genre';
            $data['master'] = 'Genre';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Staff/ADMIN/ms_Genre/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MGenre->get_genre_byid($idu);
            $data['title'] = 'Edit Genre';
            $data['master'] = 'Genre';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/ADMIN/ms_Genre/Add', $data);
        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
//                'GenreID' => $id,
                'GenreName' => $nama,
                'GenreStatus' => '1'
            );

            $isSucces = $this->MGenre->get_insert($data);
            if ($isSucces) {
                $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");
            } else {
                $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Data Added. </div>");
            }
            redirect('Genre');
        } elseif ($mau_ke === "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'GenreID' => $id,
                'GenreName' => $nama
            );
            
            $this->MGenre->get_update($id, $data);
            $isSucces = $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");
            if ($isSucces)
                $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");
            else
                $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Failed!</strong> Data Added. </div>");
            redirect('Genre');
        }
    }

    // fungsi hapus genre
    public function hapus($id) {
        //$this->MGenre->del_genre($id);
        $data = array(
            'GenreStatus' => '0'
        );
        $this->MGenre->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('genre');
    }

    public function aktif($id) {
        //$this->MGenre->del_genre($id);
        $data = array(
            'GenreStatus' => '1'
        );
        $this->MGenre->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('genre');
    }

}

?>