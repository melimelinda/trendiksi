<?php ob_start();
include "koneksi.php";

$alamat   = $_POST['alamat'];
$fb  = $_POST['fb'];
$tw  = $_POST['tw'];
$email  = $_POST['email'];
$nohp  = $_POST['nohp'];

mysqli_query($con,"INSERT INTO kontak(alamat,fb,tw,email,nohp)
VALUE('$alamat','$fb','$tw','$email','$nohp')")or die("Database Tidak Bisa Di Buka ");
header('location:contak.php');
?>