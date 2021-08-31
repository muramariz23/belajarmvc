<?php 

include '../controller/controller_kelas.php';
// membuat objek dari class kelas
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

//mengecek di objek $kelas ada berapa banyak property
//echo var_dump($kelas);

 ?>
 		<!-- icon tugas pertemuan 7 -->
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<!-- css tambahan -->
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
 		<h3>Tabel Kelas</h3> <h3><a href="view_post_kelas.php"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID KELAS</th>
 				<th>NAMA KELAS</th>
 				<th>KOMPETENSI KEAHLIAN</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetKelas)) {
 					$no = 1;
 					foreach ($GetKelas as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_kelas']; ?></td>
 							<td><?php echo $Get['nama_kelas']; ?></td>
 							<td><?php echo $Get['kompetensi_keahlian']; ?></td>
 							
 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="../views/view_put_kelas.php?id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_kelas']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_kelas) {
 				
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_kelas&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>';
 				};
 			}

 		</script>