<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of prodimodel
 *
 * @author mr foladare
 */
class prodimodel {

    //put your code here

    function __construct() {
        $connect = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connect, "uts");
        return $connect;
    }

    function selectAll() {
        $connect = $this->__construct();

        $query = "SELECT * from ms_prodi";
        return mysqli_query($connect, $query);
    }
    
    function insertProdi($kode_prodi, $nama_prodi, $singkatan, $biaya_kuliah) {
        $connect = $this->__construct();
        $query = "insert into ms_prodi values ('$kode_prodi','$nama_prodi','$singkatan','$biaya_kuliah')";
        return mysqli_query($connect, $query);
    }

    function deleteProdi($kode_prodi) {
        $connect = $this->__construct();
        $query = "delete from ms_prodi where kode_prodi='$kode_prodi'";
        return mysqli_query($connect, $query);
    }

    function selectProdi($kode_prodi) {
        $connect = $this->__construct();
        $query = "Select * from ms_prodi where kode_prodi='$kode_prodi'";
        return mysqli_query($connect, $query);
    }
    
    function updateProdi($kode_prodi, $nama_prodi, $singkatan, $biaya_kuliah ) {
        $connect = $this->__construct();
        $query = "update ms_prodi set nama_prodi='$nama_prodi', singkatan='$singkatan', biaya_kuliah='$biaya_kuliah' where kode_prodi='$kode_prodi'";
        return mysqli_query($connect, $query);
    }

}
