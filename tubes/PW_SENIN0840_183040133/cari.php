<?php 
  require 'back-end/functions.php';
      $keyword = $_GET['keyword'];
        $query_cari = "SELECT * FROM buku WHERE 
        judul LIKE '%$keyword%'";
        $buku = query($query_cari);
 ?>
  <div class="row">
    <?php if(empty($buku)) : ?>
      <tr>
        <td colspan="6">Data Tidak Ada</td>
      </tr>
    <?php endif; ?>

    <?php foreach($buku as $bk) : ?>
      <div class="col m2 s12">
        <a href="profil.php?id=<?= $bk['id_buku']; ?>"><img src="assets/img/<?= $bk['gambar']; ?>" class="responsive-img"></a> 
        <p align="center"><?= $bk['judul'];  ?></p>
      </div>
    <?php endforeach; ?>
  </div>