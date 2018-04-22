<?php
include "connect.php";

$id = $_GET['submit'];
$nama=$_GET['nama'];
$email=$_GET['email'];
$tel=$_GET['phone'];
$pekerjaan=$_GET['job'];

$sql = "UPDATE bukutelepon SET nama = '$nama', email = '$email'    , tel = '$tel', Pekerjaan = '$pekerjaan' WHERE id = '$id'";

/* eksekusi query SQL*/
$res=mysqli_query($link,$sql);
if ($res) {
	echo "Data berhasil disimpan.";

}
else echo mysqli_error($link);


/* tutup koneksi MySQL --> sifatnya optional, karena mysql otomatis menutup kalau querynya habis */
mysqli_close($link);
header('location:select.php');
?>