<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mahasiswamodel
 *
 * @author mr foladare
 */
class mahasiswamodel {

    //put your code here

    function __construct() {
        $connect = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connect, "uts");
        return $connect;
    }

    function selectAll() {
        $connect = $this->__construct();

        $query = "select ms_mhs.*, ms_prodi.* from "
                . " ms_mhs, ms_prodi "
                . " where ms_mhs.kode_prodi = ms_prodi.kode_prodi";
        return mysqli_query($connect, $query);
    }
    
    function selectProdi(){
        $connect = $this->__construct();

        $query = "select * from ms_prodi";
        return mysqli_query($connect, $query);
    }
    

    

    function insertMahasiswa($nim, $nama_mhs, $kode_prodi) {
        $connect = $this->__construct();
        $query = "insert into ms_mhs values ('$nim','$nama_mhs','$kode_prodi')";
        return mysqli_query($connect, $query);
    }

    function deleteMahasiswa($nim) {
        $connect = $this->__construct();
        $query = "delete from ms_mhs where nim='$nim'";
        return mysqli_query($connect, $query);
    }

    function selectMahasiswa($nim) {
        $connect = $this->__construct();
        $query = "Select * from ms_mhs where nim='$nim'";
        return mysqli_query($connect, $query);
    }
    function selectedProdi($kode_prodi) {
        $connect = $this->__construct();
        $query = "Select * from ms_prodi where kode_prodi='$kode_prodi'";
        return mysqli_query($connect, $query);
    }
    

    
    function updateMahasiswa($nim, $nama_mhs, $kode_prodi) {
        $connect = $this->__construct();
        $query = "update ms_mhs set nama_mhs='$nama_mhs', kode_prodi='$kode_prodi' where nim='$nim'";
        return mysqli_query($connect, $query);
    }

}
