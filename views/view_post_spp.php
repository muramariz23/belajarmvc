<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_spp" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			<td>ID SPP</td>
 			<td><input type="number" name="id_spp" required></td>
 		</tr>
 		<tr>
 			<td>TAHUN</td>
 			<td><input type="number" name="tahun" required></td>
 		</tr>
 		<tr>
 			<td>NOMINAL</td>
 			<td><input type="number" name="nominal" required></td>
 		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_spp"></td>
  		</tr>
 	</table>
 	
 </form>