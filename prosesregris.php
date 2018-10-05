	if (isset($_POST['kirim'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

		if (strlen($nim)==10) {
				if (strlen($nama)<25) {
					if (strpos($email, "@gmail.com")) {
						$qry = mysqli_query($conn, "INSERT INTO `db_regris`(`nim`, `nama`, `email`)  
									VALUES  ('$nim', '$nama', '$email')");
						
						echo "Regristrasi Berhasil";
					}else{
						echo "Regristrasi Gagal";
					}
			}else{
				echo "Regristrasi Gagal";
			}
			}else{
				echo "Regristrasi Gagal";
			}
	
	}		
?><?php


?>
