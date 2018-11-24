<?php  
	$config = array('host' => 'localhost',
					'username' => 'root',
					'password' => '',
					'database' => 'gis');

	$db = new mysqli($config['host'],
				     $config['username'],
				     $config['password'],
					 $config['database']);

	if (mysqli_connect_errno()) {
		echo "Database tidak ada";
	}

?>

 
<?php

class db {
	// deklarasi parameter koneksi database
	private $dbHost     = "localhost";
	private $dbUser     = "root";
	private $dbPassword = "";
	private $dbName     = "gis";
	
	public function connect() {
		// koneksi ke server MySQL
		$mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);	

		// cek koneksi tersambung atau tidak
		if ($mysqli->connect_error){
			echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
		}  
		
		// nilai kembalian bila koneksi berhasil
		return $mysqli;
	}
}
?>