<?php 
	if (isset($_GET['id_buku'])) {
		header("Location: index.php");
		exit;
	}

	require 'back-end/functions.php';
	$id = $_GET['id'];

	$bk = query ("SELECT * FROM buku JOIN penerbit 
				ON penerbit.id = buku.penerbit
				 WHERE id_buku = $id")[0];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PROFIL BUKU</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">

 </head>
 <body>
 	<div class="container" align="center">
 		<h2 align="center">Barang</h2>
 	<table border="1" cellspacing="0" cellpadding="10" class="striped">
			<tr>
				<td>Kode Barang 	:</td>
				<td><?= $bk['judul']; ?></td>
			</tr>
			<tr>
				<td>Nama Barang 	:</td>
				<td><?= $bk['pengarang']; ?></td>
			</tr>
			<tr>
				<td>Ukuran Barang 	:</td>
				<td><?= $bk['penerbit']; ?></td>
			</tr>
			<tr>
				<td>Harga Barang 	:</td>
				<td><?= $bk['harga']; ?></td>
			</tr>
			<tr>
				<td>Gambar 	:</td>
				<td><img src="assets/img/<?= $bk['gambar']; ?>" width='100'></td>
			</tr>
			<tr>
				<td><a href="index.php">Back</a></td>
				</tr>
	</table>
	</div>


 </body>
 </html>