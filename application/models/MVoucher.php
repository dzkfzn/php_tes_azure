<?php

class MVoucher extends CI_Model {

    var $tabel = 'voucher'; //variabel tabel 
    var $tabelr = 'games'; //variabel tabel 
    var $tabeld = 'developer';

    function __construct() {
        parent::__construct();
    }

    function get_allvoucher() {


        $this->db->select('voucher.*,games.*');
        $this->db->from('voucher');
        $this->db->join('games', 'voucher.GamesID=games.GamesID', 'inner');
        $this->db->join('developer', 'developer.DeveloperID=voucher.DeveloperID', 'inner');


        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allgames($iddev) {
        $this->db->from($this->tabelr);
        $this->db->where('DeveloperID', $iddev);
        $this->db->where('games.GamesStatusActive', 1);

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_alldeveloper() {
        $this->db->from($this->tabeld);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    // function get_new_id() {
    //     $q = $this->db->query("SELECT MAX(RIGHT(VoucherID,4)) AS kd_max FROM voucher WHERE DATE(VoucherDate)=CURDATE()");
    //     $kd = "";
    //     if ($q->num_rows() > 0) {
    //         foreach ($q->result() as $k) {
    //             $tmp = ((int) $k->kd_max) + 1;
    //             $kd = sprintf("%04s", $tmp);
    //         }
    //     } else {
    //         $kd = "0001";
    //     }
    //     date_default_timezone_set('Asia/Jakarta');
    //     return "V-" . date('dmy') . "-" . $kd;
    // }

    function get_voucher_byid($id) {
        $this->db->select('voucher.*,games.*');
        $this->db->from('voucher');
        $this->db->join('games', 'voucher.GamesID=games.GamesID', 'inner');
        $this->db->join('developer', 'voucher.DeveloperID=developer.DeveloperID', 'inner');
        $this->db->where('VoucherID', $id);
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
        $this->db->where('VoucherID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function del_voucher($id) {
        $this->db->where('VoucherID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(VoucherID,4)) AS kd_max FROM voucher WHERE DATE(VoucherDate)=CURDATE()");
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
        return "V-" . date('dmy') . "-" . $kd;
    }

}

?>