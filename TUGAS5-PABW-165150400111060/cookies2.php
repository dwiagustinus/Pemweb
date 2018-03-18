<?php 
    if (isset($_COOKIE['nomor'])) {
        echo "Website ini sudah dibuka sebanyak ".$_COOKIE['nomor']." kali, <br> Dan waktu dibuka terakhir pada jam ". $_COOKIE['waktuBuka'];
    }
    else echo "Belum ada riwayat Cookies";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><br>
<a href="cookies1.php">Klik disini untuk memenbahkan Cookies! </a>
</body>
</html>