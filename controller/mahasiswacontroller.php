<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mahasiswacontroller
 *
 * @author mr foladare
 */
include "model/mahasiswamodel.php";

class mahasiswacontroller {

    //put your code here
    public $model;

    function __construct() {
        $this->mahasiswamodel = new mahasiswamodel();
    }

    function index() {
        //menamplkan data mahasiswa saat load menu Mahasiswa
        $data = $this->mahasiswamodel->selectAll();

        //memanggil view.php pada folder view
        include 'view/mahasiswa/mahasiswa_view.php';
    }

    function viewInsert() {
        //menampilkan halaman add data

        $data = $this->mahasiswamodel->selectProdi();
       
        include "view/mahasiswa/mahasiswa_add.php";
    }

    function delete($nim) {
        $delete = $this->mahasiswamodel->deleteMahasiswa($nim);

        header("location:index.php?url=mahasiswacontroller");
    }

    function insert() {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $kode_prodi = $_POST['kode_prodi'];
       

        $insert = $this->mahasiswamodel->insertMahasiswa($nim, $nama_mhs, $kode_prodi);
        header("location:index.php?url=mahasiswacontroller");
    }

    function viewEdit($nim, $kode_prodi) {
        $data = $this->mahasiswamodel->selectMahasiswa($nim);
        
        $dataProdi = $this->mahasiswamodel->selectProdi();
        
        
        
       
        $row = mysqli_fetch_array($data);
        
        include "view/mahasiswa/mahasiswa_edit.php";
    }

    function update() {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $kode_prodi = $_POST['kode_prodi'];
       

        $update = $this->mahasiswamodel->updateMahasiswa($nim, $nama_mhs, $kode_prodi);

        header("location:index.php?url=mahasiswacontroller");
    }

}

?>