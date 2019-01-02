<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from tamu where id_tamu='$_GET[id_tamu]'");
 header('location:tabel-tamu.php');
?>