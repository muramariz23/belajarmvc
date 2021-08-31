<?php 

include '../controller/controller_petugas.php';
// membuat objek dari class petugas
$petugas = new controller_petugas();
$GetPetugas = $petugas->GetData_All();

//mengecek di objek $petugas ada berapa banyak property
//echo var_dump($petugas);

 ?>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



 		<link rel="stylesheet" type="text/css" href="../assets/navbar.css">


 		<div class="navbar">
 			<h1 class="nav-head">BELAJAR <span>MVC</span></h1>
 			<nav class="nav-body">
 				<ul class="listhead" style="list-style: none;">
 					<li><a href="view_siswa.php" class="listbody" style="background-color: #2E86C1">SISWA</a></li>
 					<li><a href="view_kelas.php" class="listbody" style="background-color: #6C3483">KELAS</a></li>
 					<li><a href="view_petugas.php" class="listbody" style="background-color: #A93226">PETUGAS</a></li>
 					<li><a href="view_spp.php" class="listbody" style="background-color: #229954">SPP</a></li>
 					<li><a href="view_pembayaran.php" class="listbody" style="background-color: #BA4A00">PEMBAYARAN</a></li>
 				</ul>
 			</nav>
 		</div>

 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel petugas</h3> <h3><a href="view_post_petugas.php"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID PETUGAS</th>
 				<th>USERNAME</th>
 				<th>PASSWORD</th>
 				<th>NAMA PETUGAS</th>
 				<th>LEVEL</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetPetugas)) {
 					$no = 1;
 					foreach ($GetPetugas as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_petugas']; ?></td>
 							<td><?php echo $Get['username']; ?></td>
 							<td><?php echo $Get['password']; ?></td>

 							 <td><?php echo $Get['nama_petugas']; ?></td>
 							 <td><?php echo $Get['level']; ?></td>

 							 <!-- //untuk tindakan -->
 							<td>
 							 	<a href="../views/view_put_petugas.php?id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_petugas']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_petugas) {
 				var a = id_petugas;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_petugas&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>';
 				};
 			}

 		</script>