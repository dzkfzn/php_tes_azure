<?php

class MKonfirmasiOrder extends CI_Model {

    var $tabel = 'order'; //variabel tabel 
    var $tabel2x = 'orderdetail';

    function __construct() {
        parent::__construct();
    }

    // function get_allorder() {
    //     $this->db->from($this->tabel);
    //     $query= $this->db->query("SELECT o.OrderID as id, c.CustomerName as nama, o.OrderDate as tgl, o.OrderStatus as status FROM order o 
    //     JOIN customer c on c.CustomerID = o.CustomerID"); 
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     }
    // }

    function get_allorder() {
        $this->db->select('order.*,customer.*');
        $this->db->from('`order`');
        $this->db->join('customer', 'customer.CustomerID=order.CustomerID', 'inner');
        $this->db->where('order.OrderStatusActive', 0);
        $this->db->where('order.OrderPayment', 'transfer');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_historyorder2() {
        $this->db->select('order.*,customer.*');
        $this->db->from('`order`');
        $this->db->join('customer', 'customer.CustomerID=order.CustomerID', 'inner');
        $this->db->where('order.OrderStatusActive', 1 || 2);
        $this->db->where('order.OrderPayment', 'transfer');

        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_historyorder() {

        $this->db->from($this->tabel);
        $query = $this->db->query("SELECT o.*, customer.* FROM `order` o JOIN customer on customer.CustomerID=o.CustomerID WHERE o.OrderStatusActive != 0 AND o.orderpayment = 'transfer'"); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_detail($orderID) {
        $this->db->select('order.*, customer.*, transfer.*, bank.*');
        $this->db->from('order');
        $this->db->join('transfer', 'transfer.orderID=order.orderID', 'inner');
        $this->db->join('bank', 'bank.bankID=transfer.bankID', 'inner');
        $this->db->join('customer', 'customer.CustomerID=order.CustomerID', 'inner');
        // $this->db->where('order.OrderPayment', 'transfer');
        $this->db->where('order.OrderID', $orderID);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
    function get_detail_games($orderID) {
        $this->db->select('GamesID');
        $this->db->from('orderdetail');
        $this->db->where('orderdetail.OrderID', $orderID);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_detail2($orderID) {
        $this->db->select('order.*,  orderdetail.*, games.*, developer.*');
        $this->db->from('order');
        $this->db->join('orderdetail', 'orderdetail.orderID =order.orderID', 'inner');
        $this->db->join('games', 'games.GamesID=orderdetail.gamesID', 'inner');
        $this->db->join('developer', 'developer.DeveloperID=games.DeveloperID', 'inner');
        // $this->db->where('order.OrderPayment', 'transfer');
        $this->db->where('order.OrderID', $orderID);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_detail_byid($orderID) {
        $this->db->select('orderdetail.*, games.*, developer.*');
        $this->db->from('orderdetail');
        $this->db->join('games', 'games.GamesID=orderdetail.gamesID', 'inner');
        $this->db->join('developer', 'games.DeveloperID=developer.DeveloperID', 'inner');
        // $this->db->where('order.OrderPayment', 'transfer');
        $this->db->where('orderdetail.OrderID', $orderID);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_detail_byid2($id) {
        $this->db->select('*');
        $this->db->from('orderdetail');
        $this->db->where('orderdetail.OrderID', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_order_byid($id) {
        $this->db->from($this->tabel2x);
        $this->db->where('OrderID', "'" . $id . "'");
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
        $this->db->where('OrderID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function get_update_library_set_to_active($gid, $idcust) {

        $data = array(
            'LibraryStatus' => '1'
        );

        $this->db->where('GamesID', $gid);
        $this->db->where('CustomerID', $idcust);
        $this->db->update('library', $data);
        return TRUE;
    }

}

?>