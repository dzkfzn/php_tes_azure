<?php

class MDeveloper extends CI_Model {

    var $tabel = 'developer'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }
    function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(DeveloperID,2)) AS kd_max FROM Developer WHERE DATE(DeveloperCreatedDate)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {

            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%02s", $tmp);
            }
        } else {
            $kd = "01";
        }
        date_default_timezone_set('Asia/Jakarta');
        return  date('dmy') . $kd;
    }

    function get_alldeveloper() {
        $this->db->select('developer.*,role.*');
        $this->db->from('developer');
        $this->db->join('role', 'developer.RoleID=role.RoleID', 'inner');



        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allrole() {
        $this->db->from('role');
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_developer_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('DeveloperID', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_insert($data) {
        $this->db->insert($this->tabel, $data);
        return TRUE;
    }

    function get_update($id, $data) {
        $this->db->where('DeveloperID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function del_developer($id) {
        $this->db->where('DeveloperID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}

?>