<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_siswa" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table class="table table-info">
 		<tr>
 			<th scope="row">NISN</th>
 			<td><input class="form-control" type="number" name="nisn" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
 		<tr>
 			<th scope="row">NIS</th>
 			<td><input class="form-control" type="number" name="nis" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
 		<tr>
 			<th scope="row">nama</th>
 			<td><input class="form-control" type="text" name="nama" onKeyPress="return alphabetOnly(event);" required></td>
 		</tr>

 		<tr>
  			<th scope="row">KELAS</th>
  			<td>
  				<select class="dropdown-list" name="id_kelas">
  					<!-- logic combo get database-->

  					
  					<!--logic combo get database-->


  					<option value= "1">RPL</option>
  					<option value= "2">TKJ</option>
  				</select>
  			</td>
  		</tr>

 		<tr>
 			<th scope="row">alamat</th>
 			<td><input class="form-control" type="text" name="alamat" onKeyPress="return alphabetOnly(event);" required></td>
 		</tr>

 		<tr>
 			<th scope="row">NO TELEPON</th>
 			<td><input class="form-control" type="number" name="no_telp" onKeyPress="return numberOnly(event);" required></td>
 		</tr>

 		<tr>
 			<th scope="row">SPP</th>
 			<td><input class="form-control" type="required" name="id_spp" onKeyPress="return numberOnly(event);" required></td>
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