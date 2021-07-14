<?php

$koneksi = mysqli_connect("localhost", "root", "", "ucp2pkw_karyawan129");

if (mysqli_connect_error()) {
    echo "koneksi database gagal : " . mysqli_connect_error();
}