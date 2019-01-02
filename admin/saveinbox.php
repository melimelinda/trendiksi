<?php ob_start();
include "koneksi.php";
if (isset($_POST['simpan'])) {
	echo "<script>alert('fgfd')</script>"
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$notelp  = $_POST['notelp'];
$pesan  = $_POST['pesan'];
$tgl = date('Y-m-d');
mysqli_query($con,"INSERT INTO inbox (nama,email,notelp,pesan,tgl)
VALUE('$nama','$email','$notelp','$pesan','$tgl')")or die("Database Tidak Bisa Di Buka ");
//header('location:../guest/contak.php');
}
?>