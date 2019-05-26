<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dropdown extends CI_Model {

    function __construct() {
        $this->provinceTbl = 'provinces';
        $this->regencyTbl = 'regencies';
        $this->districtTbl = 'districts';
        $this->villageTbl = 'villages';
    }

    /*
     * Get province rows from the provinces table
     */

    function getProvinceRows($params = array()) {
        $this->db->select('c.id, c.name');
        $this->db->from($this->provinceTbl . ' as c');

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                if (strpos($key, '.') !== false) {
                    $this->db->where($key, $value);
                } else {
                    $this->db->where('c.' . $key, $value);
                }
            }
        }
//        $this->db->where('c.status', '1');

        $query = $this->db->get();
        $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;

        //return fetched data
        return $result;
    }

    /*
     * Get regency rows from the provinces table
     */

    function getRegencyRows($params = array()) {
        $this->db->select('s.id, s.name');
        $this->db->from($this->regencyTbl . ' as s');

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                if (strpos($key, '.') !== false) {
                    $this->db->where($key, $value);
                } else {
                    $this->db->where('s.' . $key, $value);
                }
            }
        }

        $query = $this->db->get();
        $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;

        //return fetched data
        return $result;
    }

    /*
     * Get district rows from the provinces table
     */

    function getDistrictRows($params = array()) {
        $this->db->select('c.id, c.name');
        $this->db->from($this->districtTbl . ' as c');

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                if (strpos($key, '.') !== false) {
                    $this->db->where($key, $value);
                } else {
                    $this->db->where('c.' . $key, $value);
                }
            }
        }

        $query = $this->db->get();
        $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;

        //return fetched data
        return $result;
    }
    
    function getVillageRows($params = array()) {
        $this->db->select('c.id, c.name');
        $this->db->from($this->villageTbl . ' as c');

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                if (strpos($key, '.') !== false) {
                    $this->db->where($key, $value);
                } else {
                    $this->db->where('c.' . $key, $value);
                }
            }
        }

        $query = $this->db->get();
        $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;

        //return fetched data
        return $result;
    }

}
