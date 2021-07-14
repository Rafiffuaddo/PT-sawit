<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($koneksi,"SELECT * FROM users where username='$username' and password='$password'");
$cek = mysqli_num_rows($result);

if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['ID'];
	header("location:index.php");
} else {
	header("location:home.php?pesan=Masukkan Username dan Password dengan benar");
}
?>