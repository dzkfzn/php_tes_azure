<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MGames');
        $this->load->model('MConfirm_Games');

        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
//        if ($this->session->userdata('logged_in') !== TRUE) {
//            redirect('login');
//        }
    }

    // awal tampil index
    public function index() {
        $data['qgames'] = $this->MGames->get_allgames($this->session->userdata('StaffID'));
        $data['master'] = 'Games';
        $this->load->view('Staff/DEVELOPER/ms_Games/view', $data);
    }

    public function viewAdmin() {
        $data['qgames'] = $this->MGames->get_allgames_admin();
        $data['master'] = 'Games';
        $this->load->view('Staff/ADMIN/ms_Games/viewAdmin', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller
        $GamesID = $this->MGames->get_new_id();
        $DeveloperID = $this->session->userdata('StaffID');

        $GamesName = strtoupper(addslashes($this->input->post('GamesName')));
        $GamesReleaseDate = addslashes($this->input->post('GamesReleaseDate'));
        $GamesPrice = addslashes($this->input->post('GamesPrice'));
        $GamesDesc = addslashes($this->input->post('GamesDesc'));
        $GamesGenre = $this->input->post('GamesGenre');
        $arr_platform = $this->input->post('GamesPlatform');
        $games_path = $this->aksi_upload($GamesID, $GamesName);

        $thumbnail = $this->aksi_upload_thumbnail($GamesID, $GamesName);

        //SYSTEM REQUIREMENT
        $SyReqOS = $this->input->post('SyReqOS');
        $SyReqCPU = $this->input->post('SyReqCPU');
        $SyReqRAM = $this->input->post('SyReqRAM');
        $SyReqVGA = $this->input->post('SyReqVGA');
        $SyReqHDD = $this->input->post('SyReqHDD');
        $SyReqDirectX = $this->input->post('SyReqDirectX');


//        $games_path = $this->input->post('GamesPath');
//        $platform = addslashes($this->input->post('GamesPlatform'));
//        $games_path = addslashes($this->input->post('GamesPath'));
//        $status = addslashes($this->input->post('GamesStatusActive'));
//        $createdBy = addslashes($this->input->post('GamesCreatedBy'));
//        $createdDate = addslashes($this->input->post('GamesCreatedDate'));
//        $modifiedBy = addslashes($this->input->post('GamesSModifiedBy'));
//        $modifiedDate = addslashes($this->input->post('GamesModifiedDate'));
//        $lastAccess = addslashes($this->input->post('GamesLastAccess'));
        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Add Games';
            $data['aksi'] = 'aksi_add';
            $data['master'] = 'Games';
            $data['qgenre'] = $this->MGames->get_allgenre();
            $this->load->view('Staff/DEVELOPER/ms_Games/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MGames->get_games_byid($idu);
            $data['master'] = 'Games';
            $data['title'] = 'Edit Games';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Staff/DEVELOPER/ms_Games/edit', $data);
        } elseif ($mau_ke == "detail") {
             $data['qdata'] = $this->MConfirm_Games->get_games_byid($idu);
            $data['qgenre'] = $this->MConfirm_Games->get_genre_byid($idu);
            $data['qfoto'] = $this->MConfirm_Games->get_allimages($idu);

            $data['master'] = 'Games';
            $data['title'] = 'Detail Games';
            $this->load->view('Staff/DEVELOPER/ms_Games/Detail_1', $data);
        } elseif ($mau_ke == "detail_admin") {
            $data['qdata'] = $this->MConfirm_Games->get_games_byid($idu);
            $data['qgenre'] = $this->MConfirm_Games->get_genre_byid($idu);
            $data['qfoto'] = $this->MConfirm_Games->get_allimages($idu);

            $data['master'] = 'Games';
            $data['title'] = 'Detail Games';
            $this->load->view('Staff/ADMIN/ms_Games/Detail', $data);
        } elseif ($mau_ke == "aksi_add") {


//            $games_path = $this->aksi_upload($GamesID, $GamesName);
            $newDate = date("Y-m-d", strtotime($GamesReleaseDate));
            $cur = preg_replace("/([^0-9\\.])/i", "", $GamesPrice);
            foreach ($arr_platform as $key => $value) {
                $GamesPlatform .= " | " . $value;
            }
            $GamesPlatform .= " |";


            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
                'GamesID' => $GamesID,
//                'DeveloperID' => $DeveloperID,
//                'GamesModifiedBy' => $DeveloperID,
//                
                'GamesName' => $GamesName,
                'DeveloperID' => ($this->session->userdata('StaffID')),
                'GamesReleaseDate' => $newDate,
                'GamesPrice' => $cur,
                'GamesDesc' => $GamesDesc,
                'GamesPlatform' => $GamesPlatform,
                'GamesPath' => $games_path,
                'GamesThumbnail' => $thumbnail,
                'GamesRating' => 0,
                'GamesStatusActive' => 0,
                'GamesStatusVerif' => 0,
            );

            $dataSystemReq = array(
                'SyReqID' => $GamesID,
                'SyReqOS' => $SyReqOS,
                'SyReqCPU' => $SyReqCPU,
                'SyReqRAM' => $SyReqRAM,
                'SyReqVGA' => $SyReqVGA,
                'SyReqHDD' => $SyReqHDD,
                'SyReqDirectX' => $SyReqDirectX
            );
            $this->MGames->get_insert($data);
            $this->MGames->get_insert_SyReq($dataSystemReq);

            $data_genre = array();
            foreach ($GamesGenre as $key => $value) {
                $data_genre['GamesID'] = $GamesID;
                $data_genre['GenreID'] = $value;

                $this->MGames->get_insert_genre($data_genre);
            }

//            $this->uploadGambar($GamesID);

            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");
            $this->session->set_userdata('userId', $GamesID);
            redirect(base_url() . "Upload_files/upload");
//            redirect('Games');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
//                'GamesID' => $id,
//                'RoleID' => $id_developer,
//                'GamesName' => $name,
//                'GamesEmail' => $email,
//                'GamesUsername' => $username,
//                'GamesPassword' => $password,
//                'GamesAddress' => $address,
//                'GamesPhoneNum' => $phone,
            );

            $this->MGames->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('games');
        }
    }

    public function aksi_upload($GamesID, $GamesName) {
        $config['upload_path'] = './Developer/Games/';
        $config['allowed_types'] = 'zip|rar';
        $config['file_name'] = $GamesID . "-" . $GamesName;
        $config['overwrite'] = true;
//        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('GamesPath')) {
            $foto = $this->upload->data();
            return $foto['file_name'];
        } else {
            return "default.jpg";
        }
    }

    public function aksi_upload_thumbnail($GamesID, $GamesName) {
        $config['upload_path'] = './Developer/GamesThumbnail/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $GamesID . "-thumbnail-" . $GamesName;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('GamesThumbnail')) {
            $foto = $this->upload->data();
            return $foto['file_name'];
        } else {
            return "default.jpg";
        }
    }

    public function test() {
        if ($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                // File upload configuration
                $uploadPath = 'Developer/Games_Picture/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                // Load and initialize upload library
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['ImageID'] = $i;
                    $uploadData[$i]['ImagePath'] = $fileData['file_name'];
                }
            }

            if (!empty($uploadData)) {
                // Insert files data into the database
                $insert = $this->file->insert_test($uploadData);

                // Upload status message
                $statusMsg = $insert ? 'Files uploaded successfully.' : 'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg', $statusMsg);
            }
        }
    }

    public function uploadGambar($GamesID) {
        // If file upload form submitted
//        if ($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])) {
        $filesCount = count($_FILES['files']['name']);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];

            // File upload configuration
            $uploadPath = 'Developer/Games/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if ($this->upload->do_upload('file')) {
                // Uploaded file data
                $fileData = $this->upload->data();




                $id_foto = $GamesID . "-" . $i;
                $dataFoto = array(
                    'ImageID' => $id_foto,
                    'ImagePath' => $uploadData[$i]['ImagePath'] = $fileData['file_name'],
                );
                $dataFoto_Games = array(
                    'GamesID' => $GamesID,
                    'ImagesID' => $id_foto,
                );
                $insert = $this->MGames->insert_multiple_images($dataFoto);
                $insert = $this->MGames->insert_multiple_images_games($dataFoto_Games);
            }
        }

//            if (!empty($uploadData)) {
//                // Insert files data into the database
//                $insert = $this->file->insert($uploadData);
//
//                // Upload status message
//                $statusMsg = $insert ? 'Files uploaded successfully.' : 'Some problem occurred, please try again.';
//                $this->session->set_flashdata('statusMsg', $statusMsg);
//            }
//        }
    }

//    public function format_money($money) {
//        
//    }
    // fungsi hapus games
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

    public function download($file) {

        $this->load->helper('download');
        $name = $file;
        $data = file_get_contents('./Developer/Games/' . $file);
        force_download($name, $data);
        redirect('library','refresh');
    }

}

?>