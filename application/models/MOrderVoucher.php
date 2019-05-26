<?php

class MOrderVoucher extends CI_Model {

    var $tabel = 'order'; //variabel tabel 
    var $tabel2x = 'orderdetail';
    var $tabelvoucher = 'voucher';
    var $tabellibrary = 'library';
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
        $this->db->from('order');
        $this->db->join('customer', 'customer.CustomerID=order.CustomerID', 'inner');



        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }


    function get_voucher_byid($label) {
        $this->db->select('voucher.*');
        $this->db->from($this->tabelvoucher);
        $this->db->where('VoucherLabel', $label);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    // function get_status_byid($id) {
    //     $this->db->from($this->tabelvoucher);
    //     $this->db->where('VoucherID', $id);
    //     $query = $this->db->get();
    //     if ($query->num_rows() == 1) {
    //         return $query->result();
    //     }
    // }
    // function get_status_byid($id) {
    //     $this->db->from($this->tabelvoucher);
    //     $this->db->where('VoucherID', $id);
    //     $query = $this->db->get();
    //     if ($query->num_rows() == 1) {
    //         return $query->result_array();
    //     }
    // }

    function get_available_game($id , $customerID) {
        $this->db->select('library.*');
        $this->db->from($this->tabellibrary);
        $this->db->where('GamesID', $id);
        $this->db->where('CustomerID', $customerID);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result_array();
        }
        return false;
    }

    function get_insert_library($data) {
        $this->db->insert($this->tabellibrary, $data);
        return TRUE;
    }

    function get_insert_order($data) {
        $this->db->insert($this->tabel, $data);
        return TRUE;
    }

    function get_update_voucher($id, $data) {
        $this->db->where('VoucherID', $id);
        $this->db->update($this->tabelvoucher, $data);
        return TRUE;
    }

}

?>