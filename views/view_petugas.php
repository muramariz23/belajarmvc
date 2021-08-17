<?php 

include '../controller/controller_petugas.php';
// membuat objek dari class petugas
$petugas = new controller_petugas();
$GetPetugas = $petugas->GetData_All();

//mengecek di objek $petugas ada berapa banyak property
//echo var_dump($petugas);

 ?>




 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel petugas</h3> <h3><a href="view_post_petugas.php">ADD DATA</a></h3>



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
 							 	<a href="../views/view_put_petugas.php?id_petugas=<?php echo $Get['id_petugas'] ?>">VIEW | </a>
 							
 							 	<a href="../config/routes.php?function=delete_petugas&id_petugas=<?php echo $Get['id_petugas'] ?>" onclick="return confirm('ANDA YAKIN??')">DELETE</a>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>