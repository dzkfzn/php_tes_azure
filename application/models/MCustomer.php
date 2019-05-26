<?php

class MCustomer extends CI_Model {

    var $tabel = 'customer'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

    function get_allcustomer() {

        $this->db->select('customer.*');
        $this->db->from('customer');



        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }

    }

    

    function get_customer_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('CustomerID', $id);
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
        $this->db->where('CustomerID', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function del_customer($id) {
        $this->db->where('CustomerID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}

?>