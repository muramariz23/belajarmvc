<?php 

include '../controller/controller_petugas.php';
// membuat objek dari class petugas
$petugas = new controller_petugas();
$GetPetugas = $petugas->GetData_All();

//mengecek di objek $petugas ada berapa banyak property
//echo var_dump($petugas);

 ?>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel petugas</h3> <h3><a href="main.php?menu=<?php echo base64_encode(10) ?>"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>


 		<table class="table table-secondary">
  <thead>
    <tr>
      	<th scope="col">NO</th>
 		<th scope="col">ID PETUGAS</th>
 		<th scope="col">USERNAME</th>
 		<th scope="col">PASSWORD</th>
 		<th scope="col">NAMA PETUGAS</th>
 		<th scope="col">LEVEL</th>
 		<th scope="col">TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <?php 

 				//decision validasi variabel
 				if (isset($GetPetugas)) {
 					$no = 1;
 					foreach ($GetPetugas as $Get) {
 						?>
 						<tr>
 							<td scope="row"><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_petugas']; ?></td>
 							<td><?php echo $Get['username']; ?></td>
 							<td><?php echo $Get['password']; ?></td>

 							 <td><?php echo $Get['nama_petugas']; ?></td>
 							 <td><?php echo $Get['level']; ?></td>

 							 <!-- //untuk tindakan -->
 							<td>
 							 	<a href="main.php?menu=<?php echo base64_encode(11) ?>&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_petugas']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
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
 			function konfirmasi(id_petugas) {
 				var a = id_petugas;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_petugas&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>';
 				};
 			}

 		</script>