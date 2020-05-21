<?php 

	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}


	require 'functions.php';
	$buku = query("SELECT * FROM buku JOIN penerbit ON penerbit.id = buku.penerbit");

	if (isset($_GET['cari'])) {
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

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
      	.nav-wrapper {
			text-align: center;
			font-family: comic-sans-ms;
		}
		footer {
			padding: 5px;
			font-family: comic-sans-ms;
		}
      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class=" grey lighten-2">

	 <div class="navbar-fixed">
      <nav class="grey darken-4">
        <div class="container">
         <div class="nav-wrapper">
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
             	<ul class="left hide-on-med-and-down">
              	<li>
              		<form action="" method="get">
					<input type="text" name="keyword" id="keyword" autocomplete="off" class="white-text">
					</form>
              	</li>
              	</ul>
              	 <ul class="right hide-on-med-and-down">
                <li><a href="tambah.php">Tambah Data</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
          </div>
        </div> 
      </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
            <li><a href="tambah.php">Tambah Data</a></li>
            <li><a href="logout.php">Logout</a></li>
    </ul>

	<div class="container">
	<h1 class="light center grey-text text-darken-4">Toko Buku Bahari</h1>

	

	<div id="container">

	<table border="3" cellspacing="0" cellpadding="10" >
		<tr>
			<th>No.</th>
			<th>Id Barang</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Ukuran</th>
			<th>Gambar</th>
			<th>Harga</th>
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
			<td><?= $bk['harga']; ?></td>
			<td>
				<a href="ubah.php?id=<?= $bk['id_buku']; ?>">Ubah</a> | 
				<a href="hapus.php?id=<?= $bk['id_buku']; ?>" onclick="return confirm('Anda Yakin ingin menghapus?');">Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

	</div>
	</div>

	<footer class="grey darken-4 center white-text">
      <p>Copyright 2020.</p>
    </footer>
<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="../assets/js/script.js"></script>

</body>
</html>