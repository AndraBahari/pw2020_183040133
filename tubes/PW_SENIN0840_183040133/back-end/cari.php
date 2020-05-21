<?php 
require 'functions.php';
$keyword = $_GET['keyword'];
		$query_cari = "SELECT * FROM buku JOIN penerbit 
					ON penerbit.id = buku.penerbit
					WHERE 
					judul LIKE '%$keyword%' OR
					pengarang LIKE '%$keyword%' OR
					buku.penerbit LIKE '$keyword' OR
					tahun LIKE '$keyword'
					";
		$buku = query($query_cari);



 ?>
 <table border="1" cellspacing="0" cellpadding="10" class="striped">
		<tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>


		<?php if(empty($buku)) : ?>
		<tr>
			<td colspan="6">Data Tidak Ada</td>
		</tr>

		<?php endif; ?>


		<?php $i = 1 ?>
		<?php foreach($buku as $bk) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><?= $bk['judul']; ?></td>
			<td><?= $bk['pengarang']; ?></td>
			<td><?= $bk['penerbit']; ?></td>
			<td><?= $bk['tahun']; ?></td>
			<td><img src="../assets/img/<?= $bk['gambar']; ?>" width='100'></td>
			<td>
				<a href="ubah.php?id=<?= $bk['id_buku']; ?>">Ubah</a> | 
				<a href="hapus.php?id=<?= $bk['id_buku']; ?>" onclick="return confirm('Anda Yakin ingin menghapus?');">Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>