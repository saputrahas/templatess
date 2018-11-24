<?php
require_once "include/config.php";
?>
<?php
	class informasigis{
		
		public function login ($username,$password){
		global $db;
		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$hasil = $db->query($sql);
		$data = mysqli_fetch_array($hasil);
		}
			public function read_statis_visimisi(){
			global $db;
			$sql = "SELECT * FROM statis where id_statis='3'";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}


		public function read_kabupaten(){
			global $db;
			$sql = "SELECT * FROM kabupaten ORDER BY id_kab";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}

		public function read_kec(){
			global $db;
			$sql = "SELECT * FROM kecamatan ORDER BY id_kec";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}

		public function read_kel(){
			global $db;
			$sql = "SELECT * FROM kelurahan ORDER BY id_kelurahan";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}



















		public function read_statis(){
			global $db;
			$sql = "SELECT * FROM statis ORDER BY id_statis";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}
		
		public function read_guru(){
			global $db;
			$sql = "SELECT * FROM guru ORDER BY id_guru";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_array()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}
		
		public function read_photo(){
			global $db;
			$sql = "SELECT * FROM photo,album where photo.id_album=album.id_album ORDER BY photo.id_photo";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_array()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}
		public function read_photo_detail($id_album){
			global $db;
			$sql = "SELECT * FROM photo,album 
where photo.id_album=album.id_album AND photo.id_album='$id_album'";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_array()) {
					$list[] = $row;
				
				}
					return $list;
			}else{
					return false;
			}
		}
		
		public function read_album(){
			global $db;
			$sql = "SELECT * FROM album ORDER BY album.id_album";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_array()) {
					$list[] = $row;
				}
					return $list;
			}else{
					return false;
			}
		}
		public function read_komentar(){
			global $db;
			$sql = "SELECT * FROM komentar";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_array()) {
					$list[] = $row;
				}
					return $list;
			}else{
					return false;
			}
		}
		
			public function read_file(){
			global $db;
			$sql = "SELECT * FROM file";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_array()) {
					$list[] = $row;
				}
					return $list;
			}else{
					return false;
			}
		}
		


		public function create($nama_guru,$nip,$alamat,$no_hp,$jabatan){
			global $db;
			$sql = 'INSERT INTO guru (nama_guru,nip,alamat,no_hp,$jabatan) 
		values ("'.$nama_guru.'","'.$nip.'","'.$alamat.'","'.$no_hp.'","'.$jabatan.'")';
			$create = $db->query($sql);
			if ($create){
				return $create;
			}else{
				return false;
			}
		}
		
	
		
		
		
		

	}
?>