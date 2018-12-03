<?php ob_start();
include "koneksi.php";
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$tglizin = $_POST['tglizin'];
$tglkembali = $_POST['tglkembali'];

$query=mysqli_query($con,"update perijinan set nama='$nama', tujuan='$tujuan', tgl_izin='$tglizin', tgl_kembali='$tglkembali' where nama='$nama'");
header('location:tabel-perijinan.php');
?>