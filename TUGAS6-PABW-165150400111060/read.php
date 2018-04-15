<?php
$file="data.txt";
$data = file_get_contents($file);
$baris = explode("[R]", $data);
?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <body>
		<div class="teal center-align" style="padding: 10px 20px;margin: 15px;">
			<span class="font white-text"><b>DAFTAR KONTAK</b></span>
		</div>
		<div  style="padding-bottom: 5px; margin: 15px;">
		<table class="striped">
			    					<thead>
			    						<tr>
			    							<th>Nama Lengkap</th>
			    							<th>Email</th>
											<th>Nomor Telepon</th>
											<th>Pekerjaan</th>
			    							<th>Edit/Hapus</th>
			    						</tr>
			    					</thead>
			    						<?php 
			    						for($i =0; $i<count($baris)-1; $i++) {
										    $bar = explode("|F|", $baris[$i]);
			    						?>
			    						<tr>
			    							<td><?php echo $bar[0];?></td>
			    							<td><?php echo $bar[1];?></td>
											<td><?php echo $bar[2];?></td>
											<td><?php echo $bar[3];?></td>
			    							<td>
			    								<a href="edit.php?row=<?php echo $i;?>"><i class="font blue-text transparent btn"><b>edit<b></i></a>
			    								<a href="delete.php?row=<?php echo $i;?>"><i class="font red-text transparent btn"><b>hapus<b></i></a>
			    							</td>
			    						</tr>
			    						<?php }; ?>
			    				</table>
			    				<div class="teal center-align" style="padding: 10px 20px; margin: 10px">
									<a href="form.html" class="font white-text silver btn "><b>Tambahkan Kontak </b></a>
								</div>	         
				                    </div>
			                 	</div>
			                </div>
		              	</div>

    				</div>
    			</div>
    		</div>
    	</div>
    </body>
</html>
