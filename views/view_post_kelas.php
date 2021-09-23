<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_kelas" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">


    <table class="table table-info">
    <tr>
            <th scope="row">ID KELAS</th>
            <td><input class="form-control" type="number" name="id_kelas" onKeyPress="return numberOnly(event);" required></td>
        </tr>
        <tr>
            <th scope="row">NAMA KELAS</th>
            <td><input class="form-control" type="text" name="nama_kelas" required></td>
        </tr>
        <tr>
            <th scope="row">KOMPETENSI KEAHLIAN</th>
            <td><input class="form-control" type="text" name="kompetensi_keahlian" onKeyPress="return alphabetOnly(event);" required></td>
        </tr>

        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="create_kelas"></td>
        </tr>
</table>

 	<table border="1">
 		
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