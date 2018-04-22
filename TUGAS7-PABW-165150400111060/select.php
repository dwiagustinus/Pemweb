<?php
include "connect.php";

$sql="SELECT id, nama, email, tel, Pekerjaan "
	."FROM bukutelepon";

	$res = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <body>
		<div  class="teal center-align" style="padding: 10px 20px;margin: 15px;">
			<span class="font white-text"><b>DAFTAR KONTAK</b></span>
		</div>
		<div  style="padding-bottom: 5px; margin: 15px;">
		<table class="striped">
			    					<thead>
			    						<tr>
			    							<th>ID</th>
			    							<th>Nama Lengkap</th>
			    							<th>Email</th>
											<th>Nomor Telepon</th>
											<th>Pekerjaan</th>
			    							<th>Edit/Hapus</th>
			    						</tr>
			    					</thead>
			    						<?php 
			    				       while($baris = mysqli_fetch_array($res)) {
    									$id = $baris['id'];
    									echo "<tr>";
    									echo "<td>" . $id . "</td>";
    									echo "<td>" . $baris['nama'] . "</td>";
    									echo "<td>" . $baris['email'] . "</td>";
    									echo "<td>" . $baris['tel'] . "</td>";
     									echo "<td>" . $baris['Pekerjaan'] . "</td>";
       									echo '<td>
    									<a href="edit.php?id='.$id.'"><i class="font blue-text transparent btn"><b>edit<b></i></a>
										<a href="delete.php?id='.$id.'"><i class="font red-text transparent btn"><b>hapus<b></i></a>
    									</td>'; 

    									echo "</tr>"; ?>
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
