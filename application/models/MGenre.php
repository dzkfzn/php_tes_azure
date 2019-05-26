<?php

class MGenre extends CI_Model {

    var $tabel = 'genre'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

    function get_allgenre() {
        $this->db->from($this->tabel);
        $query =$this->db->query("select GenreID, GenreName,GenreStatus from genre"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_genre_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('GenreID', $id);
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
        $this->db->where('GenreID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function del_genre($id) {
        $this->db->where('GenreID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}

?>