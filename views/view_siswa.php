<?php 

include '../controllers/controller.php';
// membuat objek dari class siswa
$siswa = new controller();
$GetSiswa = $siswa->GetData_All();

//mengecek di objek $siswa ada berapa banyak property
//echo var_dump($siswa);

 ?>




 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Siswa</h3> <h3><a href="view_post_siswa.php">ADD DATA</a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>NISN</th>
 				<th>NIS</th>
 				<th>NAMA</th>
 				<th>KELAS</th>
 				<th>ALAMAT</th>
 				<th>NO TELEPON</th>
 				<th>ID SPP</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetSiswa)) {
 					$no = 1;
 					foreach ($GetSiswa as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['nisn']; ?></td>
 							<td><?php echo $Get['nis']; ?></td>
 							<td><?php echo $Get['nama']; ?></td>
 							<td><?php 
 									if ($Get['kelas']==1) {
 										echo "RPL";
 									}elseif ($Get['kelas']==2) {
 										echo "TKJ";
 									}
 							 ?></td>
 							 <td><?php echo $Get['alamat']; ?></td>

 							 <td><?php echo $Get['no_telp']; ?></td>
 							 <td><?php echo $Get['id_spp']; ?></td>

 							 //untuk tindakan
 							 <td>
 							 	<a href="../views/view_put_siswa.php?nisn=<?php echo $Get['nisn'] ?>">view</a>
 							 	VIEW | 
 							 	<a href="../config/routes.php?function=delete&nisn=<?php echo $Get['nisn'] ?>">DELETE</a>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>