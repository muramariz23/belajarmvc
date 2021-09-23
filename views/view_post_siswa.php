<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_siswa" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			<td>NISN</td>
 			<td><input type="number" name="nisn" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
 		<tr>
 			<td>NIS</td>
 			<td><input type="number" name="nis" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
 		<tr>
 			<td>nama</td>
 			<td><input type="text" name="nama" onKeyPress="return alphabetOnly(event);" required></td>
 		</tr>

 		<tr>
  			<td>KELAS</td>
  			<td>
  				<select name="id_kelas">
  					<!-- logic combo get database-->

  					
  					<!--logic combo get database-->


  					<option value= "1">RPL</option>
  					<option value= "2">TKJ</option>
  				</select>
  			</td>
  		</tr>

 		<tr>
 			<td>alamat</td>
 			<td><input type="text" name="alamat" onKeyPress="return alphabetOnly(event);" required></td>
 		</tr>

 		<tr>
 			<td>NO TELEPON</td>
 			<td><input type="number" name="no_telp" onKeyPress="return numberOnly(event);" required></td>
 		</tr>

 		<tr>
 			<td>SPP</td>
 			<td><input type="required" name="id_spp" onKeyPress="return numberOnly(event);" required></td>
 		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_siswa"></td>
  		</tr>
 	</table>
 	
 </form>


  <script>
  function numberOnly(evt){  //u
    //var e = evt || window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
  && (charCode < 48 || charCode > 57))
        return false;
        return true;
  }
       
    function alphabetOnly
    (evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
 </script>