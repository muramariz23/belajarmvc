<?php 

	//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_spp.php';

//membuat objek dari class spp
$spp = new controller_spp();
$GetSpp = $spp->GetData_Where($_GET['id_spp']);

 ?>




 <?php 

 	foreach ($GetSpp as $Get) {

  ?>

  <form action="../config/routes.php?function=put_spp" method="POST">
  	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
  	<table border="1">
  		<input type="hidden" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
  		<tr>
  			<td>TAHUN</td>
  			<td><input type="text" name="tahun" value="<?php echo $Get['tahun'] ?>"></td>
  		</tr>

  		<tr>
  			<td>NOMINAL</td>
  			<td><input type="text" name="nominal" value="<?php echo $Get['nominal'] ?>"></td>
  		</tr>


  		<tr>
      <td><a href="http://localhost/belajarmvc/views/view_spp.php">back</a></td> 
      

        <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
      </tr>
  	</table>
  </form>

  <?php } ?>