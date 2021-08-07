<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');
 ?>

 <form action="../config/routes.php?function=create" method="POST">
 	<input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			<td>NISN</td>
 			<td><input type="text" name="nisn"></td>
 		</tr>
 		<tr>
 			<td>NIS</td>
 			<td><input type="text" name="nis"></td>
 		</tr>
 		<tr>
 			<td>nama</td>
 			<td><input type="text" name="nama"></td>
 		</tr>

 		<tr></tr>

 		<tr>
 			<td>alamat</td>
 			<td><input type="text" name="alamat"></td>
 		</tr>

 		<tr>
 			<td>NO TELEPON</td>
 			<td><input type="text" name="no_telp"></td>
 		</tr>

 		<tr>
 			<td>SPP</td>
 			<td><input type="text" name="id_spp"></td>
 		</tr>

 	</table>
 	
 </form>