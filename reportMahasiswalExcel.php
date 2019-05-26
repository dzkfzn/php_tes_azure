<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "PHPExcel/Classes/PHPExcel.php";

$objPHPExcel = new PHPExcel();

//set nama kolom
$objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', 'NIM')
        ->setCellValue('B1', 'Nama Mahasiswa')
        ->setCellValue('C1', 'Prodi');
     

//inisialisasi db dan exec query
//membuka koneksi
$db = "uts";
$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die("Couldn't connect to MySQL: " . mysqli_error());
}
//      ..pilih database
mysqli_select_db($link, $db)
        or die("Couldn't open $db: " . mysqli_error());
$query = "Select ms_mhs.*,ms_prodi.* from ms_mhs,ms_prodi where ms_mhs.kode_prodi = ms_prodi.kode_prodi";
$result= mysqli_query($link, $query)
        or die('Error reading db'. mysqli_error());

$i = 2;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A'.$i,$row['nim'])
        ->setCellValue('B'.$i,$row['nama_mhs'] )
        ->setCellValue('C'.$i, $row['nama_prodi']);
        
    $i++;
}
//fileter kolom
$objPHPExcel->getActiveSheet()->setAutoFilter('A1:C'.$i);

//set bold nama kolom
$objPHPExcel->getActiveSheet()->getStyle("A1:C1")->getFont()
        ->setBold(TRUE);

//membuat kolom auto size sesuai inputan yang diberikan
$objPHPExcel->setActiveSheetIndex()->getColumnDimension('A')
        ->setAutoSize(true);
$objPHPExcel->setActiveSheetIndex()->getColumnDimension('B')
        ->setAutoSize(true);
$objPHPExcel->setActiveSheetIndex()->getColumnDimension('C')
        ->setAutoSize(true);


//RENAME SHEET
$objPHPExcel->getActiveSheet()->setTitle('UTS');
//set index sheet
//agar sheet ini yang aktif saat excel dibuka
$objPHPExcel->setActiveSheetIndex(0);

$objWriter= PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$filename = 'UTS.xlsx';

//simpan dalam direktory yang sama dengan lokasi file php
$objWriter->save($filename);
header('Location: '.$filename);

?>