<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MProduct extends CI_Model {

    function __construct() {
        $this->proTable = 'games';
        $this->custTable = 'customer';
        $this->ordTable = 'order';
        $this->ordItemsTable = 'orderdetail';
    }

    /*
     * Fetch products data from the database
     * @param id returns a single record if specified, otherwise all records
     */

    public function getRowsObj($id = '') {
        $this->db->select('*');
        $this->db->from($this->proTable);
//        $this->db->where('GamesStatusActive', '1');
        if ($id) {
            $this->db->where('GamesID', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        // Return fetched data
        return !empty($result) ? $result : false;
    }

    public function checkIsCustomerHaveGames($idGames,$customerID) {
        
        $this->db->from('library');
        $this->db->where('library.CustomerID', $customerID);
        $this->db->where('library.GamesID', $idGames);
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
        
    }

    function input_transfer($data) {
        $this->db->insert('transfer', $data);
        return TRUE;
    }

    function get_allbank() {
        $this->db->select('*');
        $this->db->from('bank');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getRows($id = '') {
        $this->db->select('developer.DeveloperName ,games.*');
        $this->db->from($this->proTable);
        $this->db->join('developer', 'developer.DeveloperID = games.DeveloperID', 'inner');

//        $this->db->where('GamesStatusActive', '1');
        if ($id) {
            $this->db->where('GamesID', $id);
            $query = $this->db->get();
            $result = $query->result_array();
        } else {

            $query = $this->db->query('SELECT ga.*,
                             group_concat(ge.GenreName) as GenreName
                             FROM games ga
                             INNER JOIN genre_games gm ON gm.GamesID = ga.GamesID
                             INNER JOIN genre ge ON ge.GenreID = gm.GenreID
                             where ga.GamesStatusActive = 1
                             GROUP BY ga.GamesID
                             ORDER BY RAND()
');
            $result = $query->result_array();
        }

        // Return fetched data
        return !empty($result) ? $result : false;
    }

    public function getRows_Wishlist($id = '') {
        $this->db->select('customer.* ,games.*,wishlist.WishlistDate, images_games.ImagesID');
        $this->db->from('wishlist');
        $this->db->join('customer', 'customer.CustomerID = wishlist.CustomerID', 'inner');
        $this->db->join('games', 'games.GamesID = wishlist.GamesID', 'inner');
        $this->db->join('images_games', 'images_games.GamesID = wishlist.GamesID', 'inner');
//        $this->db->join('genre_games', 'genre_games.GamesID = wishlist.GamesID', 'inner');
//        $this->db->join('genre', 'genre.GenreID = genre_games.GenreID', 'inner');
        $this->db->where('wishlist.CustomerID', $id);
        $this->db->group_by("images_games.GamesID");

        if ($id) {
            $query = $this->db->get();
            $result = $query->result_array();
        }
        // Return fetched data
        return !empty($result) ? $result : false;
    }

    public function getRows_Library($id = '') {
        $this->db->select('customer.* ,games.*,library.libraryDate, images_games.ImagesID');
        $this->db->from('library');
        $this->db->join('customer', 'customer.CustomerID = library.CustomerID', 'inner');
        $this->db->join('games', 'games.GamesID = library.GamesID', 'inner');
        $this->db->join('images_games', 'images_games.GamesID = library.GamesID', 'inner');
//        $this->db->join('genre_games', 'genre_games.GamesID = library.GamesID', 'inner');
//        $this->db->join('genre', 'genre.GenreID = genre_games.GenreID', 'inner');
        $this->db->where('library.CustomerID', $id);
        $this->db->where('library.LibraryStatus', 1);
        $this->db->group_by("images_games.GamesID");

        if ($id) {
            $query = $this->db->get();
            $result = $query->result_array();
        }
        // Return fetched data
        return !empty($result) ? $result : false;
    }

    public function removeWishlist($idCust, $idGames) {
        $this->db->where('GamesID', $idGames);
        $this->db->where('CustomerID', $idCust);
        $this->db->delete('wishlist');
        return TRUE;
    }

    function pembayaran($CustID, $total) {

        $this->db->query('update customer set CustomerWallet = CustomerWallet - ' . $total . ' where CustomerID = ' . '\'' . $CustID . '\'');



        $this->db->select('CustomerWallet');
        $this->db->from('customer');
        $this->db->where('CustomerID', $CustID);

        $query = $this->db->get();
        $result = $query->result_array();
        $this->session->set_userdata('CustomerWallet', $result[0]['CustomerWallet']);
        return TRUE;
    }

    function insertGamesToLibrary($idgames, $idcust) {

        $data = array(
            'GamesID' => $idgames,
            'CustomerID' => $idcust,
        );

        $this->db->insert('library', $data);
    }
    
    function insertGamesToLibrary_Pending($idgames, $idcust) {

        $data = array(
            'GamesID' => $idgames,
            'CustomerID' => $idcust,
            'LibraryStatus' => 0
        );

        $this->db->insert('library', $data);
    }

    /*
     * Fetch order data from the database
     * @param id returns a single record of the specified ID
     */

    function get_genre_byid($id) {
        $this->db->select('genre.GenreName');
        $this->db->from('genre_games');
        $this->db->where('genre_games.GamesID', $id);
        $this->db->join('genre', 'genre.GenreID=genre_games.GenreID', 'inner');


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function get_pict_byid($id) {
        $this->db->select('ImagesID');
        $this->db->from('images_games');
        $this->db->where('GamesID', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function get_syReq_byid($id) {
        $this->db->select('*');
        $this->db->from('systemreq');
        $this->db->where('SyReqID', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function wishlist_exists($gamesID, $customerID) {
        $this->db->where('GamesID', $gamesID);
        $this->db->where('CustomerID', $customerID);
        $query = $this->db->get('wishlist');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getOrder($id) {
        $this->db->select('o.*, c.*');
        $this->db->from(' `order` as o');
        $this->db->join($this->custTable . ' as c', 'c.CustomerID = o.CustomerID', 'left');
        $this->db->where('o.OrderID', $id);
        $query = $this->db->get();
        $result = $query->row_array();

        // Get order items
        $this->db->select('i.*, p.GamesThumbnail, p.GamesName, p.GamesPrice');
        $this->db->from($this->ordItemsTable . ' as i');
        $this->db->join($this->proTable . ' as p', 'p.GamesID = i.GamesID', 'left');
        $this->db->where('i.OrderID', $id);
        $query2 = $this->db->get();
        $result['items'] = ($query2->num_rows() > 0) ? $query2->result_array() : array();

        // Return fetched data
        return !empty($result) ? $result : false;
    }

    /*
     * Insert order data in the database
     * @param data array
     */

    public function insertOrder($data) {
//        // Add created and modified date if not included
//        if (!array_key_exists("created", $data)) {
//            $data['created'] = date("Y-m-d H:i:s");
//        }
//        if (!array_key_exists("modified", $data)) {
//            $data['modified'] = date("Y-m-d H:i:s");
//        }
        // Insert order data
        $insert = $this->db->insert($this->ordTable, $data);
        $insert_id = $this->db->insert_id();
        // Return the status
        return TRUE;
    }

    /*
     * Insert order items data in the database
     * @param data array
     */

    public function insertOrderItems($data = array()) {

        // Insert order items
        $insert = $this->db->insert_batch($this->ordItemsTable, $data);

        // Return the status
        return $insert ? true : false;
    }

    public function get_insert_wishlist($data) {

        // Insert order items
        $insert = $this->db->insert('wishlist', $data);

        // Return the status
        return $insert ? true : false;
    }

    public function get_remove_wishlist($GamesID, $CustomerID) {

        // Insert order items
        $this->db->where('GamesID', $GamesID);
        $this->db->where('CustomerID', $CustomerID);
        $insert = $this->db->delete('wishlist');
        // Return the status
        return $insert ? true : false;
    }

    function get_new_id() {
        $q = $this->db->query("SELECT MAX(RIGHT(OrderID,4)) AS kd_max FROM `order` WHERE DATE(OrderDate)=CURDATE()");
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
        return "INV-" . date('dmy') . "-" . $kd;
    }

}
