<?php

$file = "data.txt";
$nama = $_REQUEST['nama'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$pekerjaan = $_REQUEST['job'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $pekerjaan . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah tersimpan!";
?>
<a href="read.php">KEMBALI</a>