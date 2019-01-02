<?php ob_start();
include "koneksi.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tmptlahir = $_POST['tmptlahir'];
$tgllahir = $_POST['tgllahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$pekerjaan = $_POST['pekerjaan'];
$notelp = $_POST['notelp'];

$query=mysqli_query($con,"update santri set nama='$nama', tempatlahir='$tmptlahir', tgllahir='$tgllahir', jk='$jk', alamat='$alamat', status='$status', kewarganegaraan='$kewarganegaraan', pekerjaan='$pekerjaan', notelp='$notelp' where nik='$nik'");
header('location:tabel-santri.php');
?>