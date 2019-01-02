<?php ob_start();
include "koneksi.php";

$nama   = $_POST['nama'];
$alamat   = $_POST['alamat'];
$keterangan  = $_POST['keterangan'];
$tgl = date('Y-m-d');
$notelp  = $_POST['notelp'];

mysqli_query($con,"INSERT INTO tamu(nama,alamat,keterangan,tgl,no_tlp)
VALUE('$nama','$alamat','$keterangan','$tgl','$notelp')")or die("Database Tidak Bisa Di Buka ");
header('location:form-tamu.php');
?>