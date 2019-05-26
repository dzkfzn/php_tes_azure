<?php

class MEvent extends CI_Model {

    var $tabel = 'event'; //variabel tabel 
    

    function __construct() {
        parent::__construct();
    }

    function get_allevent() {

        $this->db->from($this->tabel);
        $query =$this->db->query("select * from event"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }

    }


    function get_event_byid($id) {
        $this->db->select('event.*');
        $this->db->from('event');
        $this->db->where('EventID', $id);
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
        $this->db->where('EventID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(EventID,4)) AS kd_max FROM event WHERE DATE(EventDate)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return "E-" . date('dmy') . "-" . $kd;

    }

}

?>