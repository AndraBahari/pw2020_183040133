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
		<?php foreach ($buku as $b): ?>
			<p class="nama">
				<a href="php/detail.php?id=<?= $b['ID'] ?>">
					<?= $b["Judul Buku"] ?>
				</a>
			</p>

		 <?php endforeach; ?>
	 </div>
</body>
</html>