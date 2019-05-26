<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dropdowns extends CI_Controller {

    function __construct() {
        parent::__construct();

        // load base_url
        $this->load->helper('url');
        $this->load->model('dropdown');
    }

    public function index() {
        $data['provinces'] = $this->dropdown->getProvinceRows();
        $this->load->view('dropdowns/index', $data);
    }

    public function getRegencies() {
        $regencies = array();
        $province_id = $this->input->post('province_id');
        if ($province_id) {
            $con['conditions'] = array('province_id' => $province_id);
            $regencies = $this->dropdown->getRegencyRows($con);
        }
        echo json_encode($regencies);
    }

    public function getDistricts() {
        $districts = array();
        $regency_id = $this->input->post('regency_id');
        if ($regency_id) {
            $con['conditions'] = array('regency_id' => $regency_id);
            $districts = $this->dropdown->getDistrictRows($con);
        }
        echo json_encode($districts);
    }
    public function getVillages() {
        $villages = array();
        $district_id = $this->input->post('district_id');
        if ($district_id) {
            $con['conditions'] = array('district_id' => $district_id);
            $villages = $this->dropdown->getVillageRows($con);
        }
        echo json_encode($villages);
    }

}
