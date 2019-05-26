<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('MEvent');
         $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
       // if ($this->session->userdata('logged_in') !== TRUE) {
        //    redirect('login');
       // }
    }

    // awal tampil index
    public function index() {
        $data['qevent'] = $this->MEvent->get_allevent();
        $data['master'] = 'Event';
        $this->load->view('staff/ADMIN/ms_Event/view', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form, sebelah kanan dari form, sebelah kiri variable controller
        $id = $this->MEvent->get_new_id();
        $event = addslashes($this->input->post('EventName'));
        $startDate = addslashes($this->input->post('startDate'));
        $endDate = addslashes($this->input->post('endDate'));

      

        if ($mau_ke == "add") {
            $data['title'] = 'Add Event';
            $data['aksi'] = 'aksi_add';
            $data['master'] = 'Event';

            $this->load->view('Staff/ADMIN/ms_Event/Add', $data);
        } elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->MEvent->get_event_byid($idu);
           
            $data['master'] = 'Event';
            $data['title'] = 'Edit Event';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('staff/ADMIN/ms_Event/Add', $data);

        } elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $date = str_replace('/', '-', $startDate);
            $newDateStart = date("Y-m-d", strtotime($startDate));

            $date2 = str_replace('/', '-', $endDate);
            $newDateEnd = date("Y-m-d", strtotime($endDate));
            $data = new stdClass();
            $data = array(
                'EventID' => $id,
                'EventName' => $event,
                'EventStartDate' => $newDateStart,
                'EventEndDate' => $newDateEnd,               
                'EventStatusActive' => 1

            );

            $this->MEvent->get_insert($data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Added. </div>");

            redirect('Event');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $date = str_replace('/', '-', $startDate);
            $newDateStart = date("Y-m-d", strtotime($startDate));

            $date2 = str_replace('/', '-', $endDate);
            $newDateEnd = date("Y-m-d", strtotime($endDate));
            $data = new stdClass();
            $data = array(
                'EventID' => addslashes($this->input->post('EventID')),
                'EventName' => $event,
                'EventStartDate' => $newDateStart,
                'EventEndDate' => $newDateEnd 
  
            );

            $this->MEvent->get_update(addslashes($this->input->post('EventID')), $data);
            $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Data Updated. </div>");

            redirect('Event');
        }
    }

    // fungsi hapus staff
    public function hapus($id) {
        //$this->MEvent->del_staff($id);
        $data = array(
            'EventStatusActive' => '0'
        );
        $this->MEvent->get_update($id, $data);
        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Disable. </div>");

        redirect('Event');
    }

    public function aktif($id) {
        //$this->MEvent->del_staff($id);
        $data = array(
            'EventStatusActive' => '1'
        );
        $this->MEvent->get_update($id, $data);




        $this->session->set_flashdata("true", "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button> <strong>Success!</strong> Changed Status to Active. </div>");

        redirect('Event');
    }

}

?>
