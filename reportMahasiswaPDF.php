<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//menggunakan package fpdf untuk membuat pdf
require ('fpdf17\fpdf.php');

class PDF extends FPDF {

    function Header() {
        //LOGO
        //lihat fungsi image() di fpdf
        $this->Image('LOGO.png', 10, 8, 20);
        //Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        //Move to the right
        //lihat fungsi cell() di fpdf
        $this->Cell(50);
        //title
        $this->Cell(100, 10, 'Report Data Mahasiswa', 1, 0, 'C');
        //Line Break
        $this->Ln(20);
    }

    //Page footer
    function Footer() {
        //Position at 1.5 from bottom
        $this->SetY(-15);
        //Arial Italic 8
        $this->SetFont('Arial', 'I', 8);
        //Page Number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    //Load Data
    function LoadData() {
        //read data from database
        $user = "root";
        $pass = "";
        $db = "uts";

        //membuka koneksi
        $link = mysqli_connect("localhost", $user, $pass);
        if (!$link) {
            die("Couldn't connect to MySQL: " . mysqli_error());
        }
//      ..pilih database
        mysqli_select_db($link, $db)
                or die("Couldn't open $db: " . mysqli_error());
        //..baca tbl
        $query = "Select ms_mhs.nim ,ms_mhs.nama_mhs, ms_prodi.nama_prodi from ms_mhs,ms_prodi where ms_mhs.kode_prodi = ms_prodi.kode_prodi";
        $result = mysqli_query($link, $query)
                or die("Select error" . mysqli_error());
        //ttup
        mysqli_close($link);

        $data = array();

        $y = 0;
        while ($a_row = mysqli_fetch_row($result)) {
            $x = 0;
            foreach ($a_row as $field) {
                $data[$y][$x] = stripslashes($field);
                $x++;
            }
            $y++;
        }
        return $data;
    }

  
    
    function BasicTable($header, $data) {
        //Header
        foreach ($header as $col)
            $this->Cell(40, 7, $col, 1);
        $this->Ln();

        //data
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(40, 6, $col, 1);
            $this->Ln();
        }
    }

}

$pdf = new PDF();
//judul header kolom
$pdf->AliasNbPages();
$header = array('NIM', 'Nama Mahasiswa', 'Prodi');

//data loading
$data = $pdf->LoadData();
$pdf->SetFont('Arial', '', 12);
$pdf->AddPage();
$pdf->BasicTable($header, $data);
$pdf->Output();
?>


