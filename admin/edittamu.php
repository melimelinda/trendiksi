<?php ob_start();
include "koneksi.php";
$id_tamu = $_POST['id_tamu'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];
$notelp = $_POST['notelp'];

$query=mysqli_query($con,"update tamu set nama='$nama', alamat='$alamat', keterangan='$keterangan', no_tlp='$notelp' where id_tamu='$id_tamu'");
header('location:tabel-tamu.php');
?>