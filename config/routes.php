<?php 

include '../controller/controller.php';

//membuat objek dari class pegawai
$db = new controller();

//membuat variabel dari GET URL
$function = $_GET['function'];

//decision variabel create
if ($function == "create") {
	
	//validasi token csrf
	if (validation() == true) {
		$db->POSTData(
			$_POST['nisn'],
			$_POST['nis'],
			$_POST['nama'],
			$_POST['id_kelas'],
			$_POST['alamat'],
			$_POST['no_telp'],
			$_POST['id_spp']
		);
	}

	header("location:../views/view_siswa.php");
	}

	//decision variabel PUT
	elseif ($function == "put") {
		
		//validasi token csrf
		if (validation()==true) {
			$db->PUTData(
			$_POST['nisn'],
			$_POST['nis'],
			$_POST['nama'],
			$_POST['id_kelas'],
			$_POST['alamat'],
			$_POST['no_telp'],
			$_POST['id_spp']
			)
		}

		header("location:../views/view_siswa.php");
	}

	//decision variabel delete
	elseif ($function == "delete") {
		$db->DELETEData($_GET['nisn']);
		header("location:../views/view_siswa.php");
	}

 ?>