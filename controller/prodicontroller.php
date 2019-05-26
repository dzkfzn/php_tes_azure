<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of prodicontroller
 *
 * @author mr foladare
 */
include "model/prodimodel.php";

class prodicontroller {

    //put your code here
    public $model;

    function __construct() {
        $this->prodimodel = new prodimodel();
    }

    function index() {
        //menamplkan data prodi saat load menu Mahasiswa
        $data = $this->prodimodel->selectAll();

        //memanggil view.php pada folder view
        include 'view/prodi/prodi_view.php';
    }

    function viewInsert() {
        //menampilkan halaman add data

        include "view/prodi/prodi_add.php";
    }

    function delete($kode_prodi) {
        $delete = $this->prodimodel->deleteProdi($kode_prodi);

        header("location:index.php?url=prodicontroller");
    }

    function insert() {
        $kode_prodi = $_POST['kode_prodi'];
        $nama_prodi = $_POST['nama_prodi'];
        $singkatan = $_POST['singkatan'];
        $biaya_kuliah = $_POST['biaya_kuliah'];

        $insert = $this->prodimodel->insertProdi($kode_prodi, $nama_prodi, $singkatan, $biaya_kuliah);
        header("location:index.php?url=prodicontroller");
    }

    function viewEdit($kode_prodi) {
        $data = $this->prodimodel->selectProdi($kode_prodi);
        $row = mysqli_fetch_array($data);

        include "view/prodi/prodi_edit.php";
    }

    function update() {
        $kode_prodi = $_POST['kode_prodi'];
        $nama_prodi = $_POST['nama_prodi'];
        $singkatan = $_POST['singkatan'];
        $biaya_kuliah = $_POST['biaya_kuliah'];
        
        $update = $this->prodimodel->updateProdi($kode_prodi, $nama_prodi, $singkatan, $biaya_kuliah);

        header("location:index.php?url=prodicontroller");
    }

}

?>