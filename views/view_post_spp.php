<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_spp" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table class="table table-info">
 		<tr>
 			<th scope="row">ID SPP</th>
 			<td><input class="form-control" type="number" name="id_spp" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
 		<tr>
 			<th scope="row">TAHUN</th>
 			<td><input  class="form-control" type="number" name="tahun" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
 		<tr>
 			<th scope="row">NOMINAL</th>
 			<td><input class="form-control" type="number" name="nominal" onKeyPress="return numberOnly(event);" required></td>
 		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_spp"></td>
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