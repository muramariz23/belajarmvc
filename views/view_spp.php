<?php 

include '../controller/controller_spp.php';
// membuat objek dari class spp
$spp = new controller_spp();
$GetSpp = $spp->GetData_All();

//mengecek di objek $spp ada berapa banyak property
//echo var_dump($spp);

 ?>


 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel spp</h3> <h3><a href="main.php?menu=<?php echo base64_encode(12) ?>"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>


 		<table class="table table-danger">
  <thead>
    <tr>
 		<th scope="col">NO</th>
 		<th scope="col">ID SPP</th>
 		<th scope="col">TAHUN</th>
 		<th scope="col">NOMINAL</th>
 		<th scope="col">TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <?php 

 				//decision validasi variabel
 				if (isset($GetSpp)) {
 					$no = 1;
 					foreach ($GetSpp as $Get) {
 						?>
 						<tr>
 							<td scope="row"><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_spp']; ?></td>
 							<td><?php echo $Get['tahun']; ?></td>
 							<td><?php echo $Get['nominal']; ?></td>
 							
 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="main.php?menu=<?php echo base64_encode(13) ?>&id_spp=<?php echo base64_encode($Get['id_spp']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_spp']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
  </tbody>
</table>


 		<table border="1">
 			
 			
 		</table>

 		<script>
 			function konfirmasi(id_spp) {
 				var a = id_spp;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_spp&id_spp=<?php echo base64_encode($Get['id_spp']) ?>';
 				};
 			}

 		</script>
