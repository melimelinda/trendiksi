<?php ob_start();
include "koneksi.php";
$id = $_POST['id'];
$alamat = $_POST['alamat'];
$fb = $_POST['fb'];
$tw = $_POST['tw'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];

$query=mysqli_query($con,"update kontak set alamat='$alamat', fb='$fb', tw='$tw', email='$email', nohp='$nohp' where id='$id'");
header('location:contak.php');
?>