
<?php

class MDiscount extends CI_Model {

    var $tabel = 'discount'; //variabel tabel 
    var $tabel_games = 'games'; //variabel tabel 
    var $tabel_event = 'event';

    function __construct() {
        parent::__construct();
    }


    function get_alldiscount() {


        $this->db->select('discount.*,event.*,games.*');
        $this->db->from('discount');
        $this->db->join('event', 'event.EventID=discount.DiscountEvent', 'inner');
        $this->db->join('games', 'discount.GamesID=games.GamesID', 'inner');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_datadiscount() {
            
        $this->db->from($this->tabel);
        $query =$this->db->query("SELECT d.DiscountID as id, d.DiscountType as type, e.EventName as eName , g.GamesName as gName, d.DiscountStartDate as sd,
        d.DiscountEndDate as ed, d.DiscountAmount as da, d.DiscountStatusActive as s FROM discount d JOIN games g on g.GamesID = d.GamesID JOIN event e on e.EventID = d.DiscountEvent"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_datadiscount2() {
            
        $this->db->from($this->tabel);
        $query =$this->db->query("SELECT d.DiscountID as id, d.DiscountType as type, g.GamesName as gName, d.DiscountStartDate as sd,
        d.DiscountEndDate as ed, d.DiscountAmount as da, d.DiscountStatusActive as s FROM discount d JOIN games g on g.GamesID = d.GamesID where (d.DiscountEvent is null or d.DiscountEvent = '')"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

     function get_allgames() {


        $this->db->select('*');
        $this->db->from('games');
        $this->db->where('GamesIsDiscount', 0);
        $this->db->where('GamesStatusActive', 1);
//       $this->db->join('developer', 'developer.DeveloperID=games.DeveloperID', 'inner');
//        $this->db->join('systemreq', 'systemreq.SyReqID=games.SyReqID', 'inner');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_data_games($id) {
        $this->db->select('games.*');
        $this->db->from($this->tabel_games);
        $this->db->where('GamesID', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result_array();
        }
        return false;
    }

    function get_allevent() {


        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('EventStatusActive', 1);
//       $this->db->join('developer', 'developer.DeveloperID=games.DeveloperID', 'inner');
//        $this->db->join('systemreq', 'systemreq.SyReqID=games.SyReqID', 'inner');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_discount_byid($id) {
        $this->db->select('discount.*');
        $this->db->from('discount');
        $this->db->where('DiscountID', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_games_byid($id) {
        $this->db->select('games.GamesName');
        $this->db->from('discount');
        $this->db->where('games.GamesID', $id);
        $this->db->join('games', 'games.GamesID=discount.GamesID', 'inner');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_event_byid($id) {
        $this->db->select('event.EventName');
        $this->db->from('discount');
        $this->db->where('DiscountEvent', $id);
        $this->db->join('event', 'event.EventID=discount.DiscountEvent', 'inner');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_eventDate_byid($id) {
        $this->db->select('EventStartDate, EventEndDate');
        $this->db->from('event');
        $this->db->where('event.EventID', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }


    function get_insert_discount($data) {
        $this->db->insert($this->tabel, $data);
        return TRUE;
    }

    function get_insert($data) {
        $this->db->insert($this->tabel, $data);
        return TRUE;
    }

    function get_update($id, $data) {
        $this->db->where('DiscountID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }
    function get_update_games($id, $data) {
        $this->db->where('GamesID', $id);
        $this->db->update($this->tabel_games, $data);
        return TRUE;
    }

    function del_discount($id) {
        $this->db->where('DiscountID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(DiscountID,4)) AS kd_max FROM discount WHERE DATE(DiscountDate)=CURDATE()");
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
        return "D-" . date('dmy') . "-" . $kd;

    }
}

?>