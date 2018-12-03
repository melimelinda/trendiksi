<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from perijinan where nama='$_GET[nama]'");
 header('location:tabel-perijinan.php');
?>