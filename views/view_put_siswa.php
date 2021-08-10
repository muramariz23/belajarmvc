<?php 

	//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_siswa.php';

//membuat objek dari class siswa
$siswa = new controller_siswa();
$GetSiswa = $siswa->GetData_Where($_GET['nisn']);

 ?>




 <?php 

 	foreach ($GetSiswa as $Get) {

  ?>

  <form action="../config/routes.php?function=put_siswa" method="POST">
  	<input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
  	<table border="1">
  		<input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
  		<tr>
  			<td>NIS</td>
  			<td><input type="text" name="nis" value="<?php echo $Get['nis'] ?>"></td>
  		</tr>

  		<tr>
  			<td>NAMA</td>
  			<td><input type="text" name="nama" value="<?php echo $Get['nama'] ?>"></td>
  		</tr>

  		<tr>
  			<td>KELAS</td>
  			<td>
  				<select name="id_kelas">
  					<!-- logic combo get database-->
            <?php 
            $GetKelas = $siswa->GetData_Kelas();
             ?>
  					<option value="<?php echo $Get['id_kelas'] ?><?php echo $Get['nama_kelas']; ?>">
  						<?php 
  							if ($Get['id_kelas']=="1") {
  								echo "RPL";
  							}elseif ($Get['id_kelas']=="3") {
  								echo "TKJ";
  							}
  						 ?>
  					</option>
  					<!--logic combo get database-->


  					<option value=1>RPL</option>
  					<option value=3>TKJ</option>
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
  			<td><input type="text" name="nominal" value="<?php echo $Get['nominal'] ?>"></td>
  		</tr>

  		<tr>
      <td><a href="http://localhost/belajarmvc/views/view_siswa.php">back</a></td>

        <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
      </tr>
  	</table>
  </form>

  <?php } ?>