<?php ob_start();
include "koneksi.php";
$nd   = $_POST['nd'];
$nb   = $_POST['nb'];
$about   = $_POST['about'];
$alamat   = $_POST['alamat'];
$tgllahir   = $_POST['tgllahir'];
$email   = $_POST['email'];
$nohp   = $_POST['nohp'];
$web  = $_POST['web'];

$query=mysqli_query($con,"update santri set nik='$nik', nama='$nama', tempatlahir='$tmptlahir', tgllahir='$tgllahir', jk='$jk', alamat='$alamat', status='$status', kewarganegaraan='$kewarganegaraan', pekerjaan='$pekerjaan', notelp='$notelp' where nik='$nik'");
header('location:tabel-santri.php');
?>