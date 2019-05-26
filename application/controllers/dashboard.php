<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('MDashboard');

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {
        $data['title'] = 'Dashboard';
        $this->load->view('Admin/dashboard', $data);
    }

    public function developer() {
        $data['title'] = 'Dashboard';
        $data['report1'] = $this->MDashboard->report_jumlah_games_belum_konfirmasi();
        $data['report2'] = $this->MDashboard->report_jumlah_games_ditolak();
        $data['report3'] = $this->MDashboard->report_jumlah_games_diterima();
        $data['report4'] = $this->MDashboard->report_jumlah_games();
        $data['report5'] = $this->MDashboard->report_jumlah_games_terbanyak();
        $data['title'] = 'Dashboard';
        $this->load->view('Staff/developer/dashboard', $data);
    }

    public function admin() {
        $data['title'] = 'Dashboard';
        $data['report1'] = $this->MDashboard->report_jumlah_games_belum_konfirmasi();
        $data['report2'] = $this->MDashboard->report_jumlah_games_ditolak();
        $data['report3'] = $this->MDashboard->report_jumlah_games_diterima();
        $data['report4'] = $this->MDashboard->report_jumlah_games();
        $data['report5'] = $this->MDashboard->report_jumlah_games_terbanyak();
        $data['report6'] = $this->MDashboard->report_profit_perbulan();
        $this->load->view('Staff/admin/dashboard', $data);
    }

    public function super_admin() {
        $data['report1'] = $this->MDashboard->report_jumlah_staff();
        $data['report2'] = $this->MDashboard->report_jumlah_admin();
        $data['report3'] = $this->MDashboard->report_jumlah_super_admin();
        $data['report4'] = $this->MDashboard->report_jumlah_finance();
        $data['report5'] = $this->MDashboard->report_jumlah_manager();

        $data['title'] = 'Dashboard';
        $this->load->view('Staff/super_admin/dashboard', $data);
    }

    public function manager() {
        $data['report1'] = $this->MDashboard->report_perbandingan_voucher_purchase();
        $data['report5'] = $this->MDashboard->report_jumlah_games_terbanyak();
        $data['report6'] = $this->MDashboard->report_profit_perbulan();
        $data['title'] = 'Dashboard';
        $this->load->view('Staff/MANAGER/dashboard', $data);
    }
    public function manager_profit() {
        $data['report1'] = $this->MDashboard->report_perbandingan_voucher_purchase();
        $data['report5'] = $this->MDashboard->report_jumlah_games_terbanyak();
        $data['report6'] = $this->MDashboard->report_profit_perbulan();
        $data['title'] = 'Dashboard';
        $this->load->view('Staff/MANAGER/report_profit', $data);
    }

    public function finance() {

        $data['report1'] = $this->MDashboard->report_jumlah_order_belum_konfirmasi();
        $data['report2'] = $this->MDashboard->report_jumlah_order_ditolak();
        $data['report3'] = $this->MDashboard->report_jumlah_order_diterima();
        $data['report4'] = $this->MDashboard->report_jumlah_order();
        $data['report5'] = $this->MDashboard->report_jumlah_games_terbanyak();
        $data['report6'] = $this->MDashboard->report_profit_perbulan();
//        $data['report4'] = $this->MDashboard->report_jumlah_finance();
//        $data['report5'] = $this->MDashboard->report_jumlah_manager();

        $data['title'] = 'Dashboard';
        $this->load->view('Staff/finance/dashboard', $data);
    }

}

?>