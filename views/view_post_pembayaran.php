<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_pembayaran" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

  <table class="table table-info">
    <tr>
      <td>ID PEMBAYARAN</td>
      <td><input class="form-control" type="number" name="id_pembayaran" onKeyPress="return numberOnly(event);"  required></td>
    </tr>
    <tr>
        <td>ID PETUGAS</td>
        <td>
          <select class="dropdown-list" name="id_petugas">
            <option value= "1">RIZKI</option>
            <option value= "3">RAMA</option>
          </select>
        </td>
      </tr>
    <tr>
      <td>NISN</td>
      <td><input class="form-control" type="number" name="nisn" onKeyPress="return numberOnly(event);"  required></td>
    </tr>

    <tr>
      <td>TANGGAL BAYAR</td>
      <td><input class="form-control" type="number" name="tgl_bayar" onKeyPress="return numberOnly(event);"  required></td>
      </tr>

    <tr>
      <td>BULAN DIBAYAR</td>
      <td><input class="form-control" type="number" name="bulan_dibayar" onKeyPress="return numberOnly(event);"  required></td>
    </tr>

    <tr>
      <td>TAHUN DIBAYAR</td>
      <td><input class="form-control" type="number" name="tahun_dibayar" onKeyPress="return numberOnly(event);" required></td>
    </tr>

    <tr>
      <td>SPP</td>
      <td><input class="form-control" type="number" name="id_spp" onKeyPress="return numberOnly(event);" required></td>
    </tr>

    <tr>
      <td>JUMLAH DIBAYAR</td>
      <td><input class="form-control" type="number" name="jumlah_bayar" onKeyPress="return numberOnly(event);" required></td>
    </tr>

    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="create_pembayaran"></td>
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