 <?php  
  session_start();

  if (isset($_SESSION['username'])) {
    header("Location: back-end/index.php");
    exit;
  }

  require 'back-end/functions.php';
      $buku = query("SELECT * FROM buku");
      if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $query_cari = "SELECT * FROM buku WHERE 
                      judul LIKE '%$keyword%'";
        $buku = query($query_cari);

  }
  ?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
        footer {
          padding: 3px;
          font-family: comic-sans-ms;
        }
      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body  class="grey lighten-2">
  <div class="navbar-fixed">
    <nav class="grey darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
              <li>
                <form action="" method="get">
                <input type="text" name="keyword" id='keyword' autocomplete='off' class="white-text">     
                </form>
              </li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li><a href="#home">Home</a></li>
              <li><a href="back-end/login.php">Login</a></li>
            </ul>
          </div>
        </div> 
    </nav>
  </div>
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#home">Home</a></li>
      <li><a href="back-end/login.php">Login</a></li>
    </ul>
    

  <section class="portfolio grey lighten-3">
    <div class="container">
      <h1 class="light center grey-text text-darken-4">Toko Buku Bahari</h1>
        <div id="container">
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
      </div>
  </section>
<footer class="grey darken-4 center white-text">
    <p>Copyright 2020.</p>
</footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>

<?php 

 ?>