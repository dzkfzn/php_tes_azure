<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tr_daftar_ulangmodel
 *
 * @author mr foladare
 */
class tr_daftar_ulangmodel {

    //put your code here

    function __construct() {
        $connect = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connect, "uts");
        return $connect;
    }

    function selectAll() {
        $connect = $this->__construct();

        $query = "SELECT * from tr_daftar_ulang";
        return mysqli_query($connect, $query);
    }

    function insertTr_daftar_ulang($nim, $grade, $total_biaya) {
        $connect = $this->__construct();
        $query = "insert into tr_daftar_ulang values ('$nim', '$grade','$total_biaya')";
        return mysqli_query($connect, $query);
    }

    function selectTr_daftar_ulang($nim) {
        $connect = $this->__construct();
        $query = "Select * from tr_daftar_ulang where nim='$nim'";
        return mysqli_query($connect, $query);
    }

    function selectMahasiswa($nim) {
        $connect = $this->__construct();
        $query = "Select ms_mhs.*, ms_prodi.* from ms_mhs,ms_prodi where ms_mhs.nim='$nim' and ms_mhs.kode_prodi = ms_prodi.kode_prodi  ";
        return mysqli_query($connect, $query);
    }

}
