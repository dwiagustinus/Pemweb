<?php
    $nomor = 1;
    if (isset($_COOKIE['nomor'])) {
        $count = $_COOKIE['nomor']+1;
        $nomor = $count;
    }
    date_default_timezone_set('Asia/Jakarta');
    setcookie("nomor", $nomor, time()+300);
    setcookie("waktuBuka", date('H:i:s d-m-Y'), time()+300);
    
?>
<!DOCTYPE html>
<html lang="en">

<body>
    COOKIES DITAMBAHKAN!<br>
    Perulangan Website Cookies dalam waktu 5 menit.<br>
    <br>
    <a href="cookies2.php">Klik disini untuk melihat informasi Cookies</a>
</body>
</html>