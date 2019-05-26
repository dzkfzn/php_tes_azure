
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Discount extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MDiscount');

        $this->load->helper(array('form', 'url'));

        // if ($this->session->userdata('logged_in') !== TRUE) {
        //    redirect('login');
        // }
    }

    // awal tampil index
    public function index() {
        //  $data['qdiscount'] = $this->MDiscount->get_alldiscount();
        $data['master'] = 'Discount';
        $data['qdiscount'] = $this->MDiscount->get_datadiscount();
        $data['qdiscount2'] = $this->MDiscount->get_datadiscount2();
        $this->load->view('staff/ADMIN/ms_Discount/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller


        if ($mau_ke == "add_regular") {
            $data['title'] = 'Add Discount';
            $data['aksi'] = 'aksi_add';
            $data['master'] = 'Discount';
            $data['qgames'] = $this->MDiscount->get_allgames();
            $data['qevent'] = $this->MDiscount->get_allevent();



            $this->load->view('staff/ADMIN/ms_Discount/add', $data);
        } elseif ($mau_ke == "addEvent") {

            $data['qgames'] = $this->MDiscount->get_allgames();
            $data['qevent'] = $this->MDiscount->get_allevent();
            $data['title'] = 'Add Discount';
            $data['aksi'] = 'aksi_add';
           
            $this->load->view('staff/ADMIN/ms_Discount/add_EventDisc', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MDiscount->get_discount_byid($idu);

            $data['master'] = 'Discount';
            $data['title'] = 'Edit Discount';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('staff/ADMIN/ms_Discount/add', $data);
        } elseif ($mau_ke == "aksi_add_regular") {
            //$newDateStart = date("Y-m-d", strtotime($startDate));
 
            $startDate =  date("Y-m-d", strtotime(addslashes($this->input->post('DiscountStartDate'))));
            $endDate =   date("Y-m-d", strtotime(addslashes($this->input->post('DiscountEndDate'))));

            $amount = addslashes($this->input->post('DiscountAmount'));
            $gamesDiscount = $this->input->post('GamesID');


            foreach ($gamesDiscount as $key => $value) {
                $data_games['DiscountID'] = $this->MDiscount->get_new_id();
                $data_games['GamesID'] = $value;
                $data_games['DiscountType'] = 'Regular';

                $data_games['DiscountStartDate'] = $startDate;
                $data_games['DiscountEndDate'] = $endDate;
                $data_games['DiscountAmount'] = $amount;
                $data_games['DiscountStatusActive'] = '1';

                $cek = $this->MDiscount->get_insert_discount($data_games);
                if (!$cek) {
                    redirect('login');
                }
            }

            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Discount');
        }elseif ($mau_ke == "aksi_add_event") {
            $endDate = addslashes($this->input->post('DiscountEndDate'));
            $amount = addslashes($this->input->post('DiscountAmount'));
            $gamesDiscount = $this->input->post('GamesID');
            $event = $this->input->post('EventID');
            $date = $this->MDiscount->get_eventDate_byid($event);
            //extract($date, EXTR_PREFIX_ALL, 'var');
            
            $startDate = $date[0]['EventStartDate'];
            $endDate = $date[0]['EventEndDate'];
        
            foreach ($gamesDiscount as $key => $value) {
                $data_games['DiscountID'] = $this->MDiscount->get_new_id();
                $data_games['GamesID'] = $value;
                $data_games['DiscountType'] = 'Event';
                $data_games['DiscountEvent'] = $event;
                $data_games['DiscountStartDate'] = $startDate;
                $data_games['DiscountEndDate'] = $endDate;
                $data_games['DiscountAmount'] = $amount;
                $data_games['DiscountStatusActive'] = '1';

                $cek = $this->MDiscount->get_insert_discount($data_games);
                if (!$cek) {
                    redirect('login');
                }
            }

            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Discount');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'DiscountAmount' => $amount
            );

            $this->MDiscount->get_update($id, $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('Discount');
        }
    }

    // fungsi hapus staff
    public function hapus($id) {
        //$this->MDiscount->del_staff($id);
        $data = array(
            'DiscountStatusActive' => '0'
        );
        $this->MDiscount->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('Discount');
    }

    public function aktif($id) {
        //$this->MDiscount->del_staff($id);
        $data = array(
            'DiscountStatusActive' => '1'
        );
        $this->MDiscount->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('Discount');
    }

    public function getDate() {

        $EventID = $this->input->post('EventID');
        if ($EventID) {
            $con['conditions'] = array('EventID' => $EventID);
            $Event = $this->MDiscount->get_eventDate_byid($con);
        }
        echo json_encode($Event);
    }

}

?>
