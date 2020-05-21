<?php 
$conn = mysqli_connect("localhost","root","root","183040133_buku");


	function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
	$rows[] = $row;

		}
		return $rows;
	}

	function tambah($data){
		global $conn;

		$judul = htmlspecialchars($data['judul']);
		$pengarang = htmlspecialchars($data['pengarang']);
		$penerbit = htmlspecialchars($data['penerbit']);
		$tahun = htmlspecialchars($data['tahun']);
		$gambar = htmlspecialchars($data['gambar']);
		$harga = htmlspecialchars($data['harga']);

		$query = "INSERT INTO buku
					VALUES
					('','$judul','$pengarang','$penerbit','$tahun', '$gambar', '$harga')";
		


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM  buku WHERE id_buku = $id");

		return mysqli_affected_rows($conn);
	}

	function ubah($data){
		global $conn;
		$id = $data['id'];
		$judul = htmlspecialchars($data['judul']);
		$pengarang = htmlspecialchars($data['pengarang']);
		$penerbit = htmlspecialchars($data['penerbit']);
		$tahun = htmlspecialchars($data['tahun']);
		$gambar = htmlspecialchars($data['gambar']);
		$harga = htmlspecialchars($data['harga']);

		$query = "UPDATE buku SET 
					judul = '$judul',
					pengarang = '$pengarang',
					penerbit = '$penerbit',
					tahun = '$tahun',
					gambar = '$gambar'
					harga = '$harga'
				WHERE id_buku = $id

					";
		


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function registrasi($data){
		global $conn;
		$username = $data['username'];
		$password1 = $data['password1'];
		$password2 =$data['password2'];
		
		//cek user 
		$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		if (mysqli_num_rows($cek_user) > 0 ) {
				echo "<script>
				alert('Username sudah terdaftar');
				document.location.href = registrasi.php;
				</script>";

				return false;
			}	
			// password1 tidak sama dengan passsword 2
			if ($password1 != $password2) {
				echo "<script>
				alert('Password tidak sesuai');
				document.location.href = registrasi.php;
				</script>";

				return false;
			}
			// user name dan password sudah ok 
			$password = password_hash($password1, PASSWORD_DEFAULT);

			$query = "INSERT INTO user VALUES
			('', '$username', '$password')";
			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);

	}



 ?>