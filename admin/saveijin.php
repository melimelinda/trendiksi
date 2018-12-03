<?php ob_start();
session_start();
include "koneksi.php";

$nik = $_POST['nik'];
$nama   = $_POST['nama'];
$tujuan   = $_POST['tujuan'];
$tglizin  = $_POST['tglizin'];
//$tglizin = date('Y-m-d');
$tglkembali  = $_POST['tglkembali'];
// we must never forget to start the session
$query=mysqli_query($con,"select * from santri where nik='$nik'");
$a=mysqli_num_rows($query);
$hasil = mysqli_fetch_array($query);
$errorMessage='';
if ($a==TRUE) {
	mysqli_query($con,"INSERT INTO perijinan(nama,tujuan,tgl_izin,tgl_kembali)
	VALUE('$nama','$tujuan','$tglizin','$tglkembali')")or die("Database Tidak Bisa Di Buka ");
	header('location:form-perijinan.php');
}else{
      echo "<script>alert('NIK Anda Tidak Terdaftar!'); location='form-perijinan.php';</script>";
}
?>