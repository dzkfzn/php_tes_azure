<?php

class MConfirm_Games extends CI_Model {

    var $tabel = 'games'; //variabel tabel 
    var $tabel_genre = 'genre_games'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

    function get_allgames() {


        $this->db->select('games.*,developer.*');
        $this->db->from('games');
        $this->db->join('developer', 'developer.DeveloperID=games.DeveloperID', 'inner');
//        $this->db->join('systemreq', 'systemreq.SyReqID=games.SyReqID', 'inner');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allimages($id) {


        $this->db->select('ImagesID');
        $this->db->from('images_games');
        $this->db->where('GamesID', $id);

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allgenre() {


        $this->db->select('*');
        $this->db->from('genre');
//       $this->db->join('developer', 'developer.DeveloperID=games.DeveloperID', 'inner');
//        $this->db->join('systemreq', 'systemreq.SyReqID=games.SyReqID', 'inner');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(GamesID,4)) AS kd_max FROM games WHERE DATE(GamesDate)=CURDATE()");
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
        return "G-" . date('dmy') . "-" . $kd;
    }

    function get_games_byid($id) {
        $this->db->select('games.*,systemreq.*');
        $this->db->from('games,systemreq');
        $this->db->where('systemreq.SyReqID', $id);
        $this->db->where('games.GamesID', $id);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_genre_byid($id) {
        $this->db->select('genre.GenreName');
        $this->db->from('genre_games');
        $this->db->where('genre_games.GamesID', $id);
        $this->db->join('genre', 'genre.GenreID=genre_games.GenreID', 'inner');


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_insert($data) {
        $this->db->insert($this->tabel, $data);
        return TRUE;
    }

    function get_insert_SyReq($data) {
        $this->db->insert('systemreq', $data);
        return TRUE;
    }

    function get_insert_genre($data) {
        $this->db->insert($this->tabel_genre, $data);
        return TRUE;
    }

    function insert_multiple_images($data) {
        $this->db->insert('image', $data);
        return TRUE;
    }

    function insert_multiple_images_games($data) {
        $this->db->insert('images_games', $data);
        return TRUE;
    }

    function get_update($id, $data) {
        $this->db->where('GamesID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function del_games($id) {
        $this->db->where('GamesID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    /*
     * Fetch files data from the database
     * @param id returns a single record if specified, otherwise all records
     */

    public function getRows($id = '') {
        $this->db->select('id,file_name,uploaded_on');
        $this->db->from('files');
        if ($id) {
            $this->db->where('id', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            $this->db->order_by('uploaded_on', 'desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result) ? $result : false;
    }

    /*
     * Insert file data into the database
     * @param array the data for inserting into the table
     */

    public function insert_test($data = array()) {
        $insert = $this->db->insert_batch('images_games', $data);
        return $insert ? true : false;
    }

}

?>