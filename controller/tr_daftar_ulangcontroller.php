<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tr_daftar_ulangcontroller
 *
 * @author mr foladare
 */
include "model/tr_daftar_ulangmodel.php";

class tr_daftar_ulangcontroller {

    //put your code here
    public $model;
    public $gradeQ;
    function __construct() {
        $this->tr_daftar_ulangmodel = new tr_daftar_ulangmodel();
    }

    function index() {
        //menamplkan data tr_daftar_ulang saat load menu Mahasiswa
        $data = $this->tr_daftar_ulangmodel->selectAll();

        //memanggil view.php pada folder view
        include 'view/tr_daftar_ulang/tr_daftar_ulang_view.php';
    }

    function viewInsert() {
        //menampilkan halaman add data

        include "view/tr_daftar_ulang/tr_daftar_ulang_add.php";
    }

   
    function viewEdit() {
        $nim = $_POST['nim'];
        $gradeQ = $_POST['grade'];
        

        $potongan_biaya;
        $dataMahasiswa = $this->tr_daftar_ulangmodel->selectMahasiswa($nim);
        if ($gradeQ == "A") {
            $potongan_biaya = 5000000;
        } else
        if ($gradeQ == "B") {
            $potongan_biaya = 3000000;
        } else
        if ($gradeQ == "C") {
            $potongan_biaya = 1500000;
        }




        $row = mysqli_fetch_array($dataMahasiswa);

        $total_biaya_kuliah = $row['biaya_kuliah'] - $potongan_biaya;

        include "view/tr_daftar_ulang/tr_daftar_ulang_edit.php";
    }
    
    function insert() {
        $nim = $_POST['nimQ'];
        $grade =  $gradeQ;
       


        $insert = $this->tr_daftar_ulangmodel->insertTr_daftar_ulang($nim, $grade, $total_biaya);
       // header("location:index.php?url=tr_daftar_ulangcontroller");
    }

}

?>