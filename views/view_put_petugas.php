<?php 

	//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_petugas.php';

//membuat objek dari class petugas
$petugas = new controller_petugas();
$id_petugas = base64_decode($_GET['id_petugas']);
$GetPetugas = $petugas->GetData_Where($id_petugas);
 ?>




 <?php 

 	foreach ($GetPetugas as $Get) {

  ?>

  <form action="../config/routes.php?function=put_petugas" method="POST">
  	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
  	<table class="table table-warning">
  		<input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
  		<tr>
  			<th scope="row">USERNAME</th>
  			<td><input class="form-control" type="text" name="username" value="<?php echo $Get['username'] ?>"></td>
  		</tr>

  		<tr>
  			<th scope="row">PASSWORD</th>
  			<td><input class="form-control" type="text" name="password" value="<?php echo $Get['password'] ?>"></td>
  		</tr>

      <tr>
        <th scope="row">NAMA PETUGAS</td>
        <td><input class="form-control" type="text" name="nama_petugas" value="<?php echo $Get['nama_petugas'] ?>"></td>
      </tr>

  		<tr>
  			<th scope="row">LEVEL</th>
  			<td>
  				<select class="dropdown-list" name="level">
  					<!-- logic combo get database-->

  					<option value="<?php echo $Get['level']; ?>">
  						<?php 
  							if ($Get['level']=="1") {
  								echo "ADMINISTRATOR";
  							}elseif ($Get['level']=="2") {
  								echo "PETUGAS";
  							}
  						 ?>
  					</option>
  					<!--logic combo get database-->


  					<option value=1>ADMINISTRASI</option>
  					<option value=2>PETUGAS</option>
  				</select>
  			</td>
  		</tr>

  		<tr>
      <td><a href="main.php?menu=<?php echo base64_encode(3) ?>"><button type="button" class="btn btn-danger">KEMBALI</button></a></td> 
      <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
      </tr>
  	</table>
  </form>

  <?php } ?>