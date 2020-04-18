<?php
		
	$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal!");

	mysqli_select_db($conn, "pw_183040133") or die("Database salah!");

	$result = mysqli_query($conn, "SELECT * FROM buku");
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
		 	<?php while($row = mysqli_fetch_assoc($result)) : ?>
		 	<tr>
		 		<td><?= $i ?></td>
		 		<td><img src="assets/img/<?= $row["Cover"]; ?>" width="50"></td>
		 		<td><?=$row ["Judul Buku"]; ?></td>
		 		<td><?=$row ["Penulis"]; ?></td>
		 		<td><?=$row ["Penerbit"]; ?></td>
		 		<td><?=$row ["Tebal Buku"]; ?></td>
		 	</tr>
		 	<?php $i++ ?>
		 	<?php endwhile; ?>
		 </table>
	 </div>
</body>
</html>