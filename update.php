<?php

include 'config.php';

$id = $_POST['ID'];
$nama = $_POST['nama'];
$KTP = $_POST['KTP'];
$no = $_POST['no.telp'];
$tahun = $_POST['tahun masuk'];
$masa = $_POST['masa kerja'];

mysqli_query($koneksi, "update karyawan set nama='$nama', KTP='$KTP', no.telp='$no',tahun masuk '$tahun',masa kerja'$masa' where ID='$id'");

header("location:index.php");