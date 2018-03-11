  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="mockedup1.php" method="REQUEST" enctype="multipart/form-data">
	<h2><i class="fa fa-user"></i>Form Pendaftaran Kelas Musik</h2>
	<br/>
	<div class="form-group">
		<input type="text" class="input-mode" name="nama1" placeholder="Nama Depan...">
	</div>
	<div class="form-group">
	<input type="text" class="input-mode" name="nama2"placeholder="Nama Belakang...">
	</div>
	<div class="form-group">
	<input type="text" name ="email" class="input-mode" name="email" placeholder="Email...">	
	</div>

	<div class="form-group">
	<input type="text" class="input-mode" name="hp" placeholder="Nomor Handphone...">	
	</div>
	<div class="form-group">
	<textarea style="line-height:70px" type="text" class="textarea" name="alamat" placeholder="Alamat..."></textarea> 
	</div>
	<div class="select2"> Alat Musik Yang Dikuasai :
	<br>
		<input type="checkbox" name="cek[]" value="Violin" id="cek-pria" class="cek"><label  for="cek-pria">Violin</label>
		<input type="checkbox" name="cek[]" value="Piano" id="cek-wanita" class="cek"><label for="cek-wanita">Piano</label>
		<input type="checkbox" name="cek[]" value="Flute" id="cek-pria" class="cek"><label for="cek-pria">Flute</label>
		<input type="checkbox" name="cek[]" value="Drum" id="cek-wanita" class="cek"><label for="cek-wanita">Drum</label>
	</br>
	</div>
	<div class="select">
   <select name="option">
     <option class="input-mode">- AGAMA -</option>
      <option value="Khatolik">Khatolik</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Islam">Islam</option>
   </select>
</div>

	<div class="form-group form-cek">
		<input type="radio" name="kelamin" value="Pria" id="cek-pria" class="cek"><label for="cek-pria">Pria</label>
		<input type="radio" name="kelamin" value="Wanita" id="cek-wanita" class="cek"><label for="cek-wanita">Wanita</label>
	</div>
	
	
	<p class="upload" > 
    <strong>Upload Foto KTP</strong>
    <input type="file" name="file" id="file">
	</p>
	<br/>
	<form>
<input class="btn btn-submit" type="submit" name ="enter" value="Daftar" onclick="window.location.href='mockedup1.php'" />

	
	<br/>

	</form>

	
</body>
</html>