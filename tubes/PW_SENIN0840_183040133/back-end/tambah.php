<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}

require 'functions.php';
if( isset($_POST['tambah']) ){
	if (tambah($_POST) > 0) {
	echo "<script>
		 alert('data berhasil ditambahkan!');
		 document.location.href = 'index.php';
		</script>";
	
	}
}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data Buku </title>
	<link rel="stylesheet" type="text/css" href="../assets/css/materialize.css">
	<style type="text/css">
	body {
		background-image: url(../assets/img/wp2.jpg);
		background-size: cover;
	}
	.container {
		width: 400px;
		margin: auto;
		padding: 30px 20px;
		}
	</style>
</head>
<div class="container">
<body>


	
<div class="container grey lighten-2">
	<h3>Form Tambah Data Buku</h3>
	<form method="post" action="">
		<ul>
			<li>
				<label>Judul : </label><br>
				<input type="text" name="judul" required autocomplete='off'>
			</li>
			<li>
				<label>Pengarang : </label><br>
				<input type="text" name="pengarang" required autocomplete='off'>
			</li>
			<li>
				<label>Penerbit : </label><br>
				<input type="text" name="penerbit" required autocomplete='off'>
			</li>
			<li>
				<label>Tahun : </label><br>
				<input type="text" name="tahun" required autocomplete='off'>
			</li>
			<li>
				<label>Gambar : </label><br>
				<input type="text" name="gambar" required autocomplete='off'>
			</li>
			<li>
				<label>Harga : </label><br>
				<input type="text" name="harga" required autocomplete='off'>
			</li>
			<li>
				<br>
				<button class="btn waves-effect waves-light" type="sumbit" name="tambah">Tambah</button>
			</li>
		</ul>

	</form>
</div>






	
</body>
</html>