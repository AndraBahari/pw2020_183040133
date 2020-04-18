<?php
	require 'php/functions.php';

	$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
</head>
<body>

	<div class="container">
		<table cellpadding="10" cellspacing="0" border="1">
		 	<tr>
		 		<th>NO</th>
		 		<th>Cover</th>
		 		<th>Judul Buku</th>
		 		<th>Penulis</th>
		 		<th>Penerbit</th>
		 		<th>Tebal Buku</th>
		 	</tr>
		 	<?php $i = 1 ?>
		 	<?php foreach ($buku as $b): ?>
		 	<tr>
		 		<td><?= $i ?></td>
		 		<td><img src="assets/img/<?= $b["Cover"]; ?>" width="50"></td>
		 		<td><?=$b ["Judul Buku"] ?></td>
		 		<td><?=$b ["Penulis"]; ?></td>
		 		<td><?=$b ["Penerbit"]; ?></td>
		 		<td><?=$b ["Tebal Buku"]; ?></td>
		 	</tr>
		 	<?php $i++ ?>
		 	<?php endforeach; ?>
		 </table>
	 </div>
</body>
</html>