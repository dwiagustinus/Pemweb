<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="mockedup2.css">
</head>
<body>
	<form action="" method="REQUEST" enctype=”multipart/form-data”>
	<h2><i class="fa fa-user"></i>Form Pendaftaran Kelas Musik</h2>
	<br/>
	<div class="form-group">
		Nama Depan	:  <?php $name = $_REQUEST['nama1']; echo $name; ?>
	</div>
	<div class="form-group">
		Nama Depan		: <?php $name = $_REQUEST['nama2']; echo $name; ?>
	</div>
	<div class="form-group">
	Email	: <?php $name = $_REQUEST['email']; echo $name; ?>
	</div>
	<div class="form-group">
	Nomor Handphone : <?php $name = $_REQUEST['hp']; echo $name; ?>
	</div>

	<div class="form-group">
	Alamat : <?php $name = $_REQUEST['alamat']; echo $name; ?>
	</div>
	<div class="form-group">
	Alat Musik Yang Dikuasai :
	<br>
	<? php
    <?php
    if(!empty($_REQUEST['cek'])) {
    foreach($_REQUEST['cek'] as $check) {
            echo $check; 

    }
}
?>
	?>
	
	</div>
	<div class="form-group">
	
	</div>
<div class="form-group">
	Jenis Kelamin : <?php $name = $_REQUEST['kelamin']; echo $name; ?>
	</div>
	
	
<div class="form-group">
	Foto KTP :
	<br>
	<?php $tmp = $_FILES['file']['tmp_name']; 
move_uploaded_file($tmp, 'profile.jpg');?>
<img src="profile.jpg">
	</div>



	<div class="form-group">
		<button class="btn btn-submit">&nbsp;Kembali </i></button>
		<button class="btn btn-submit">Lanjutkan &nbsp;</i></button>
	</div>
	<br/>


	</form>

	
</body>
</html>