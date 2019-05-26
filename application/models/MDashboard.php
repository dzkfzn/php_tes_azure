<?php

class MDashboard extends CI_Model {

    var $tabel = 'genre'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function report_jumlah_order_belum_konfirmasi() {
        $query = $this->db->query(" SELECT COUNT(OrderID) as hitung from `order` WHERE (OrderStatusActive) = 0 "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_order_ditolak() {
        $query = $this->db->query(" SELECT COUNT(OrderID) as hitung from `order` WHERE (OrderStatusActive) = 2 "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_order_diterima() {
        $query = $this->db->query(" SELECT COUNT(OrderID) as hitung from `order` WHERE (OrderStatusActive) = 1 "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_order() {
        $query = $this->db->query(" SELECT COUNT(OrderID) as hitung from `order` "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function report_jumlah_games_belum_konfirmasi() {
        $query = $this->db->query(" SELECT COUNT(GamesID) as hitung from `games` WHERE (GamesStatusVerif) = 0 "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_games_ditolak() {
        $query = $this->db->query(" SELECT COUNT(GamesID) as hitung from `games` WHERE (GamesStatusVerif) = 2 "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_games_diterima() {
        $query = $this->db->query(" SELECT COUNT(GamesID) as hitung from `games` WHERE (GamesStatusVerif) = 1 "); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_games() {
        $query = $this->db->query(" SELECT COUNT(GamesID) as hitung from `games`"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_games_terbanyak() {
        $query = $this->db->query(" SELECT  games.GamesName, SUM(orderdetail.Quantity) AS TotalQuantity
                FROM orderdetail
                INNER JOIN games on games.GamesID = orderdetail.GamesID 
                GROUP BY orderdetail.GamesID
                ORDER BY SUM(orderdetail.Quantity) DESC
                LIMIT 5"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
     function report_perbandingan_voucher_purchase() {
        $query = $this->db->query(" SELECT 
	(SELECT count(OrderID) FROM `order` WHERE OrderIsVoucher = 0 and month(OrderDate) = month(CURRENT_DATE())) as purchase,
    (SELECT count(OrderID) FROM `order` WHERE OrderIsVoucher = 1 and month(OrderDate) = month(CURRENT_DATE())) as voucher
"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function report_profit_perbulan() {
        $query = $this->db->query("SELECT  (0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 1)) as Bulan1,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 2)) as Bulan2,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 3)) as Bulan3,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 4)) as Bulan4,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 5)) as Bulan5,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 6)) as Bulan6,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 7)) as Bulan7,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 8)) as Bulan8,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 9)) as Bulan9,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 10)) as Bulan10,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 11)) as Bulan11,
	(0.20 * (SELECT SUM(orderdetail.UnitPrice) as Keuntungan
	FROM 
    `order` INNER JOIN orderdetail ON `order`.OrderID = orderdetail.OrderID
	where  MONTH(`order`.OrderDate) = 12)) as Bulan12"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function report_jumlah_staff() {
        $query = $this->db->query(" SELECT COUNT(StaffID) as hitung from `staff`"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_admin() {
        $query = $this->db->query(" SELECT COUNT(StaffID) as hitung from `staff` WHERE (RoleID) = 1 "); //cek apakah ada ba 

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_super_admin() {
        $query = $this->db->query(" SELECT COUNT(StaffID) as hitung from `staff` WHERE (RoleID) = 3 "); //cek apakah ada ba 

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_finance() {
        $query = $this->db->query(" SELECT COUNT(StaffID) as hitung from `staff` WHERE (RoleID) = 2 "); //cek apakah ada ba 

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function report_jumlah_manager() {
        $query = $this->db->query(" SELECT COUNT(StaffID) as hitung from `staff` WHERE (RoleID) = 4 "); //cek apakah ada ba 

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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