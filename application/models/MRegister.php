<?php

class MRegister extends CI_Model {

    var $tabel = 'customer'; //variabel tabel 
    var $tabelr = 'role'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

    

    function get_province_byid() {
        $this->db->select('*');
        $this->db->from('provinces');
//        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_regency_byid($id) {
        $this->db->select('*');
        $this->db->from('regencies');
        $this->db->where('province_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_district_byid($id) {
        $this->db->select('*');
        $this->db->from('districts');
        $this->db->where('regency_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_village_byid($id) {
        $this->db->select('*');
        $this->db->from('villages');
        $this->db->where('district_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function verify_user($id) {
        $this->db->select('StaffStatusVerif');
        $this->db->from('staff');
        $this->db->where('StaffID', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        }
    }

    function is_email_available($email) {
        $this->db->where('StaffEmail', $email);
        $query = $this->db->get("staff", 1);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function is_username_available($username) {
        $this->db->where('StaffUsername', $username);
        $query = $this->db->get("staff");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_hash_value($id) {
        $this->db->select('customer.*');
        $this->db->from('customer');
        $this->db->where('CustomerID', $id);
//        $query = $this->db->get();

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->CustomerHash;
        }
    }


      function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(CustomerID,4)) AS kd_max FROM customer WHERE DATE(CustomerDate)=CURDATE()");
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

    function get_staff_byid($id) {
        $this->db->select(''
                . 'staff.*,'
                . 'role.*,'
                . 'staff.StaffCreatedBy as CreatedID,'
                . 'created.StaffName as CreatedName,'
                . 'staff.StaffModifiedBy as ModifiedID,'
                . 'modified.StaffName as ModifiedName,'
                . 'provinces.name as PName,'
                . 'regencies.name as RName,'
                . 'districts.name as DName,'
                . 'villages.name as VName');
        $this->db->from('staff');
        $this->db->join('role', 'staff.RoleID=role.RoleID', 'inner');
        $this->db->join('staff as created', 'staff.StaffCreatedBy = created.StaffID', 'LEFT OUTER');
        $this->db->join('staff as modified', 'staff.StaffModifiedBy = modified.StaffID', 'LEFT OUTER');

        $this->db->join('provinces', 'provinces.id=staff.StaffProvince', 'inner');
        $this->db->join('regencies', 'regencies.id=staff.StaffRegency', 'inner');
        $this->db->join('districts', 'districts.id=staff.StaffDistrict', 'inner');
        $this->db->join('villages', 'villages.id=staff.StaffVillage', 'inner');

        $this->db->where('staff.StaffID', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {

            return array('dataStaff' => $query->result(),
                'i' => 1);
        } else {
            $this->db->select('staff1.*,'
                    . 'role.*,'
                    . 'staff1.StaffCreatedBy as CreatedID,'
                    . 'created.StaffName as CreatedName,'
                    . 'staff1.StaffModifiedBy as ModifiedID,'
                    . 'modified.StaffName as ModifiedName,');
            $this->db->from('staff as staff1');
            $this->db->join('role', 'staff1.RoleID=role.RoleID', 'inner');
            $this->db->join('staff as created', 'staff1.StaffCreatedBy = created.StaffID', 'LEFT OUTER');
            $this->db->join('staff as modified', 'staff1.StaffModifiedBy = modified.StaffID', 'LEFT OUTER');
            $this->db->where('staff1.StaffID', $id);
            $query = $this->db->get();
            return array('dataStaff' => $query->result(),
                'i' => 0);
        }
    }

    function get_staff_byid_edit($id) {
        $this->db->from($this->tabel);
        $this->db->join('role', 'staff.RoleID=role.RoleID', 'inner');

        $this->db->where('StaffID', $id);
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

    function del_staff($id) {
        $this->db->where('CustomerID', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}

?>