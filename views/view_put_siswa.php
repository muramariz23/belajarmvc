<?php 

	//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controllers/controller.php';

//membuat objek dari class siswa
$siswa = new controller();
$GetSiswa = $siswa->GetData_Where($_GET['nisn']);

 ?>




 <?php 

 	foreach ($GetSiswa as $Get) {

  ?>

  <form action="../config/routes.php?function=put" method="POST">
  	<input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
  	<table border="1">
  		<input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
  		<tr>
  			<td>NIS</td>
  			<td><input type="text" name="nis" value="<?php echo $Get['nis'] ?>"></td>
  		</tr>

  		<tr>
  			<td>NAMA</td>
  			<td><input type="text" name="nis" value="<?php echo $Get['nis'] ?>"></td>
  		</tr>

  		<tr>
  			<td>KELAS</td>
  			<td>
  				<select name="id_kelas">
  					<!-- logic combo get database-->

  					<option value="<?php echo $Get['id_kelas']; ?>">
  						<?php 
  							if ($Get['id_kelas']==1) {
  								echo "RPL";
  							}elseif ($Get['id_kelas']==1) {
  								echo "TKJ";
  							}
  						 ?>
  					</option>
  					<!--logic combo get database-->


  					<option value=1>RPL</option>
  					<option value=2>TKJ</option>
  				</select>
  			</td>
  		</tr>

  		<tr>
  			<td>ALAMAT</td>
  			<td><input type="text" name="alamat" value="<?php echo $Get['alamat'] ?>"></td>
  		</tr>

  		<tr>
  			<td>NO TELEPON</td>
  			<td><input type="text" name="no_telp" value="<?php echo $Get['no_telp'] ?>"></td>
  		</tr>

  		<tr>
  			<td>SPP</td>
  			<td><input type="text" name="id_spp" value="<?php echo $Get['id_spp'] ?>"></td>
  		</tr>

  		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
  		</tr>
  	</table>
  </form>

  <?php } ?>