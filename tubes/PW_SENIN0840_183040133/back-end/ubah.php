x
<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}

require 'functions.php';


$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id_buku = $id ")[0];



if( isset($_POST['ubah']) ){
	if (ubah($_POST) > 0) {
	echo "<script>
		 alert('data berhasil diubah !');
		 document.location.href = 'index.php';
		</script>";
	
	}
}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Data Buku </title>
	<link rel="stylesheet" type="text/css" href="../assets/css/materialize.css">
	<style type="text/css">
		body {
			background-image: url(../assets/img/wp3.jpg);
			background-size: cover;
		}
		.container {
		width: 400px;
		margin: auto;
		padding: 30px 20px;
		}
	</style>
</head>
<body>

<div class="container grey lighten-2">
	<h3>Form Ubah Data Buku</h3>

	<form method="post" action="">
		<input type="hidden" name="id" value="<?= $bk['id_buku']; ?>">
		<ul>
			<li>
				<label>Judul	: </label><br>
				<input type="text" name="judul" required value="<?= $bk['judul']; ?>">
			</li>
			<li>
				<label>Penerbit	: </label><br>
				<input type="text" name="penerbit" required value="<?= $bk['penerbit']; ?>">
			</li>
			<li>
				<label>Pengarang	: </label><br>
				<input type="text" name="pengarang" required value="<?= $bk['pengarang']; ?>">
			</li>
			<li>
				<label>Tahun	: </label><br>
				<input type="text" name="tahun" required value="<?= $bk['tahun']; ?>">
			</li>
			<li>
				<label>Gambar	: </label><br>
				<input type="text" name="gambar" required value="<?= $bk['gambar'] ?>">
			</li>
			<li>
				<label>Harga	: </label><br>
				<input type="text" name="harga" required value="<?= $bk['harga'] ?>">
			</li><br>
				<button class="btn waves-effect waves-light" type="sumbit" name="ubah">Ubah</button>
		</ul>

	</form>
</div>






	
</body>
</html>