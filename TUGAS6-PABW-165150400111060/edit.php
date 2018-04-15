<?php

$file = "data.txt";
$data = file_get_contents($file);

function editData($nama, $email, $phone, $pekerjaan) {
    $data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $pekerjaan;
        return $data;
}
$rowdel = $_REQUEST['row'];
$row = explode("[R]", $data);
$newdata = "";
for($i = 0; $i<count($row)-1; $i++) {
    $kolom = explode("|F|", $row[$i]);
    if($i == $rowdel) {
        ?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
    <body>
             <div class="card">
                <div class="teal center-align" style="padding: 15px 20px;">
                  <span class="font white-text"><b>EDIT KONTAK</b></span>
                </div>
                <div class="card-content" style="padding-bottom: 5px;">
                  <form action="#" method="POST">
                    <div class="row">
                      <div class="input-field">
                        <input placeholder="Masukkan nama anda " type="text" name="nama" value="<?php echo $kolom[0] ?>">
                        <label>Nama</label>
                      </div>
                      <div class="input-field">
                        <input placeholder="Masukkan email anda" type="email" name="email" value="<?php echo $kolom[1] ?>">
                        <label>Email</label>
                      </div>
                      <div class="input-field">
                        <input placeholder="Masukkan nomor telepon anda" type="tel" name="phone" value="<?php echo $kolom[2] ?>">
                        <label>Nomor Telepon</label>
                      </div>
                      <div class="input-field">
                        <input placeholder="Masukkan pekerjaan anda" type="text" name="job" value="<?php echo $kolom[3] ?>">
                        <label>Pekerjaan</label>
                      <div class="center-align">
                        <button class="btn teal" type="submit" name="submit">SIMPAN PERUBAHAN
                                     </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    </body>
</html>
        <?php
        if (isset($_REQUEST['submit'])) {
            $nama = $_REQUEST['nama'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $pekerjaan = $_REQUEST['job'];
            $row[$i] = editData($nama, $email, $phone, $pekerjaan);
        }
        
    }
    $newdata .= $row[$i] . "[R]";
}
if (isset($_REQUEST['submit'])) {
    file_put_contents($file, $newdata);
    header('location:read.php');
}
?>

