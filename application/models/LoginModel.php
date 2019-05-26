<?php

class LoginModel extends CI_Model {

    public function validate($username, $password) {
        $this->updateLastAcces($username);
        $this->db->select('staff.*,role.*');
        $this->db->from('staff');
        $this->db->join('role', 'staff.RoleID=role.RoleID', 'inner');
        $this->db->where('StaffUsername', $username);
        $this->db->where('StaffPassword', $password);
        $result = $this->db->get();
        return $result;
    }
    
    public function validateISDev($username, $password) {
        $this->db->select('developer.*');
        $this->db->from('developer');
        $this->db->where('DeveloperUsername', $username);
        $this->db->where('DeveloperPassword', $password);
        $result = $this->db->get();
        return $result;
    }

    public function updateLastAcces($username) {

        $this->db->set('StaffLastAccess', 'NOW()', FALSE);
        $this->db->where('StaffUsername', $username);
        $this->db->update('staff');
    }

    public function resolve_user_login($username, $password) {

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash);
    }

    public function get_user_id_from_username($username) {

        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('username', $username);

        return $this->db->get()->row('id');
    }

    /**
     * get_user function.
     * 
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
    public function get_user($user_id) {

        $this->db->from('users');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();
    }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * verify_password_hash function.
     * 
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);
    }

}
