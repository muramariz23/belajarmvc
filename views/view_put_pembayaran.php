<?php 

  //memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_pembayaran.php';

//membuat objek dari class pembayaran
$pembayaran = new controller_pembayaran();
$id_pembayaran = base64_decode($_GET['id_pembayaran']);
$GetPembayaran = $pembayaran->GetData_Where($id_pembayaran);
 ?>

 <?php 

  foreach ($GetPembayaran as $Get) {

  ?>

  <form action="../config/routes.php?function=put_pembayaran" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
    <table class="table table-warning">
      <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
      <tr>
        <th scope="row">ID PETUGAS</th>
        <td><input class="form-control" type="text" name="id_petugas" value="<?php echo $Get['id_petugas'] ?>"></td>
      </tr>

      <tr>
        <th scope="row">NISN</th>
        <td><input class="form-control" type="text" name="nisn" value="<?php echo $Get['nisn'] ?>"></td>
      </tr>

       <tr>
        <th scope="row">TANGGAL DIBAYAR</th>
        <td><input class="form-control" type="text" name="tgl_bayar" value="<?php echo $Get['tgl_bayar'] ?>"></td>
      </tr>

      <tr>
        <th scope="row">TANGGAL DIBAYAR</th>
        <td><input class="form-control" type="text" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar'] ?>"></td>
      </tr>

      <tr>
        <th scope="row">TAHUN DIBAYAR</th>
        <td><input class="form-control" type="text" name="tahun_bayar" value="<?php echo $Get['tahun_bayar'] ?>"></td>
      </tr>

      <tr>
        <th scope="row">NOMINAL SPP</th>
        <td>
        <select class="dropdown-list" name="id_spp">

          <!-- Logic combo Get database -->
          <option value="<?php echo $Get['id_spp']; ?>">
          <?php
            if($Get['id_spp']=="1"){
              echo "250000";
            } else if ($Get['id_spp']=="2") {
              echo "300000";
            } elseif ($Get['id_spp']=="3") {
              echo "400000";
            } else {
              echo "450000";
            }
          ?>
          </option>
          <!-- Logic combo Get database -->

          <option value="1">250000</option>
          <option value="2">300000</option>
          <option value="3">400000</option>
          </select>
        </td>
      </tr>

      <th scope="row">JUMLAH BAYAR</th>
        <td><input class="form-control" type="text" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar'] ?>"></td>
      </tr>

      <tr>
        <td><a href="main.php?menu=<?php echo base64_encode(5) ?>"><button type="button" class="btn btn-danger">KEMBALI</button></a></td> 
        <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
      </tr>
    </table>
  </form>

  <?php } ?>