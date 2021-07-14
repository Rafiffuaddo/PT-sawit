<?php
//include koneksi database
include './config.php';

//menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$KTP = $_POST['KTP'];
$no = $_POST['no.telp'];
$tahun = $_POST['tahun masuk'];
$masa = $_POST['masa kerja'];

//menginput data ke database
$result = $koneksi->
    query("INSERT INTO karyawan VALUES(0,'$nama', '$KTP', '$no', '$tahun', '$masa')");
if($result){
    header("location:./index.php");
}else {
    echo $koneksi->error; 
}
?> 