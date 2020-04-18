<?php
	
	if(!isset($_GET['id'])){
		header("location: ../index.php");
		exit;
	} 

	require 'functions.php';

	$id = $_GET['id'];

	$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class = "container">
		<div class = "gambar">
			<img src="../assets/img/<?= $buku["Cover"]; ?>" alt="" width="100">
		</div>
		<div class = "keterangan">
			<p><?= $buku["Judul Buku"]; ?></p>
			<p><?= $buku["Penulis"]; ?></p>
			<p><?= $buku["Penerbit"]; ?></p>
			<p><?= $buku["Tebal Buku"]; ?></p>
		</div>

		<button class = "tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>

</body>
</html>