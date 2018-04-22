<?php
include "connect.php";
$id= $_GET['id'];
$sql = "SELECT id, nama, email, tel, Pekerjaan "
    ."FROM bukutelepon WHERE id='$id'";
        $res = mysqli_query($link,$sql);
        $temp=mysqli_fetch_array($res); 
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
                  <form action="update.php?id='$id'" method="GET">
                    <div class="row">
                      <div class="input-field">
                        <input placeholder="Masukkan nama anda " type="text" name="nama" value="<?php echo $temp['nama'] ?>">
                        <label>Nama</label>
                      </div>
                      <div class="input-field">
                        <input placeholder="Masukkan email anda" type="email" name="email" value="<?php echo $temp['email'] ?>">
                        <label>Email</label>
                      </div>
                      <div class="input-field">
                        <input placeholder="Masukkan nomor telepon anda" type="tel" name="phone" value="<?php echo $temp['tel'] ?>">
                        <label>Nomor Telepon</label>
                      </div>
                      <div class="input-field">
                        <input placeholder="Masukkan pekerjaan anda" type="text" name="job" value="<?php echo $temp['Pekerjaan'] ?>">
                        <label>Pekerjaan</label>
                      <div class="center-align">
                        <button class="btn teal" type="submit" name="submit" value="<?php echo $temp['id'] ?>" > SIMPAN PERUBAHAN
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

 
