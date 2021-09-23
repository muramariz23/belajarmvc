<?php 

include '../controller/controller_pembayaran.php';
// membuat objek dari class siswa
$pembayaran = new controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

//mengecek di objek $pembayaran ada berapa banyak property
//echo var_dump($pembayaran);

 ?>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Pembayaran</h3> <h3><a href="main.php?menu=<?php echo base64_encode(14) ?>"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID PEMBAYARAN</th>
 				<th>NAMA PETUGAS</th>
 				<th>NISN</th>
 				<th>TANGGAL</th>
 				<th>BULAN</th>
 				<th>TAHUN</th>
 				<th>NOMINAL</th>
 				<th>JUMLAH BAYAR</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetPembayaran)) {
 					$no = 1;
 					foreach ($GetPembayaran as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_pembayaran']; ?></td>
 							<td><?php echo $Get['nama_petugas']; ?></td>
 							<td><?php echo $Get['nisn']; ?></td>
 							<td><?php echo $Get['tgl_bayar']; ?></td>
 							<td><?php echo $Get['bulan_dibayar']; ?></td>
 							<td><?php echo $Get['tahun_bayar']; ?></td>
 							<td><?php echo $Get['nominal']; ?></td>
 							<td><?php echo $Get['jumlah_bayar']; ?></td>


 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="main.php?menu=<?php echo base64_encode(15) ?>&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_pembayaran']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_pembayaran) {
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_pembayaran&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>';
 				};
 			}

 		</script>