<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from santri where nik='$_GET[nik];'");
 header('location:tabel-santri.php');
?>