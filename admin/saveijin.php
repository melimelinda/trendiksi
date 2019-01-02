<?php ob_start();
include 'koneksi.php';

$nik   = $_POST['nik'];
$nama   = $_POST['nama'];
$tujuan  = $_POST['tujuan'];
$tglizin = date('Y-m-d');
$tglkembali  = $_POST['tglkembali'];

mysqli_query($con,"INSERT INTO perijinan(nik,nama,tujuan,tgl_izin,tgl_kembali)
VALUE('$nik','$nama','$tujuan','$tglizin','$tglkembali')")or die("Database Tidak Bisa Di Buka ");
header('location:form-perijinan.php');
?>