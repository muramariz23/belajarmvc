<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_petugas" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table class="table table-info" border="1">
 		<tr>
 			<th scope="row">ID PETUGAS</th>
 			<td><input class="form-control" type="number" name="id_petugas" onKeyPress="return numberOnly(event);"  required></td>
 		</tr>
 		<tr>
 			<th scope="row">USERNAME</th>
 			<td><input class="form-control" type="text" name="username" onKeyPress="return alphabetOnly(event);" required></td>
 		</tr>
 		<tr>
 			<th scope="row">PASSWORD</th>
 			<td><input class="form-control" type="text" name="password" onKeyPress="return alphabetOnly(event);" required></td>
 		</tr>

    <tr>
      <th scope="row">NAMA PETUGAS</th>
      <td><input class="form-control" type="text" name="nama_petugas" onKeyPress="return alphabetOnly(event);" required></td>
    </tr>

 		<tr>
  			<th scope="row">LEVEL</th>
  			<td>
  				<select class="dropdown-list" name="level">
  					<!--logic combo get database-->


  					<option value= "administrator">ADMINISTRATOR</option>
  					<option value= "petugas">PETUGAS</option>
  				</select>
  			</td>
  		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_petugas"></td>
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