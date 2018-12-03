<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from tamu where nama='$_GET[nama]'");
 header('location:tabel-tamu.php');
?>