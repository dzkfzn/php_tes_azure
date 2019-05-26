<?php

class MBank extends CI_Model {

    var $tabel = 'bank'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

    function get_allbank() {
        $this->db->from($this->tabel);
        $query =$this->db->query("select BankID, BankName, BankNoRek,BankStatusActive from bank"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_bank_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('BankID', $id);
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
        $this->db->where('BankID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function del_bank($id) {
        $this->db->where('BankID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}

?>