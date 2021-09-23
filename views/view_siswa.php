<?php 

include '../controller/controller_siswa.php';
// membuat objek dari class siswa
$siswa = new controller_siswa();
$GetSiswa = $siswa->GetData_All();

//mengecek di objek $siswa ada berapa banyak property
//echo var_dump($siswa);

 ?>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Siswa</h3> <h3><a href="main.php?menu=<?php echo base64_encode(8) ?>"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>


 		<table class="table table-warning">
  <thead>
    <tr>
      <th >#</th>
		<th scope="col">NO</th>
 		<th scope="col">NISN</th>
 		<th scope="col">NIS</th>
 		<th scope="col">NAMA</th>
 		<th scope="col">KELAS</th>
 		<th scope="col">ALAMAT</th>
 		<th scope="col">NO TELEPON</th>
 		<th scope="col">NOMINAL</th>
 		<th scope="col">TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
   <?php 

 				//decision validasi variabel
 				if (isset($GetSiswa)) {
 					$no = 1;
 					foreach ($GetSiswa as $Get) {
 						?>
 						<tr>
 							<td scope="row"><?php echo $no++; ?></td>
 							<td><?php echo $Get['nisn']; ?></td>
 							<td><?php echo $Get['nis']; ?></td>
 							<td><?php echo $Get['nama']; ?></td>
 							<td><?php echo $Get['nama_kelas']; ?></td>
 							
 							 <td><?php echo $Get['alamat']; ?></td>

 							 <td><?php echo $Get['no_telp']; ?></td>
 							 <td><?php echo $Get['nominal']; ?></td>

 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="main.php?menu=<?php echo base64_encode(9) ?>&nisn=<?php echo base64_encode($Get['nisn']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['nisn']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
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
 			function konfirmasi(nisn) {
 				
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_siswa&nisn=<?php echo base64_encode($Get['nisn']) ?>';
 				};
 			}

 		</script>