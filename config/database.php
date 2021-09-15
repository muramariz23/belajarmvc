<?php 

//koneksi ke database
class database
{

	//property untuk dijadikan objek
	var $host = "db4free.net";
	var $uname = "muri_ramariz2";
	var $pass = "*5hSGJX8PcuJ#TE";
	var $db = "db_spp1";
	var $connection;
	
	//method koneksi ke database
	function connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}

 ?>