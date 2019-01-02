<?php ob_start();
include "koneksi.php";

$file   = $_FILES['file']['type'];
$tgl = date('Y-m-d');
  $lokasi_file = $_FILES['file']['tmp_name'];
  $nama_file = $_FILES['file']['name'];
  $save_file =move_uploaded_file($lokasi_file,"file/$nama_file");

mysqli_query($con,"INSERT INTO struktur(file,tgl)
VALUE('$file','$tgl')")or die("Database Tidak Bisa Di Buka ");
header('location:struktur.php');
?>