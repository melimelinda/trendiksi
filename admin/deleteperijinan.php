<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from perijinan where nik='$_GET[nik]'");
 header('location:tabel-perijinan.php');
?>