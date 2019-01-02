<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from galeri where id_galeri='$_GET[id_galeri]'");
 header('location:galery.php');
?>