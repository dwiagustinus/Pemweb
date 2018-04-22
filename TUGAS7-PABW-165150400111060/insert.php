<?php
include "connect.php";
/* konfigurasi*/
$user='user';
$pass='rahasia';
$host='localhost';
$db='butel';

/* buat koneksi ke server mysql*/
$link=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal dibuat";
	exit;
}

$nama=$_POST['nama'];
$email=$_POST['email'];
$tel=$_POST['phone'];
$pekerjaan=$_POST['job'];

$sql="INSERT INTO bukutelepon (nama,email,tel,pekerjaan) "
	. "VALUES ('$nama','$email','$tel','$pekerjaan')";


/* eksekusi query SQL*/
$res=mysqli_query($link,$sql);
if ($res) {
	echo "Data berhasil disimpan.";

}
else echo mysqli_error($link);


/* tutup koneksi MySQL --> sifatnya optional, karena mysql otomatis menutup kalau querynya habis */
mysqli_close($link);
?>
<a href="select.php">KEMBALI</a>