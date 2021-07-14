<?php
include 'config.php';

$id = $_GET['ID'];

mysqli_query($koneksi, "delete from karyawan where ID='$id'");

header("location:index.php");