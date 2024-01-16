<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="./css/styleguide.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Riwayat</title>
  </head>
  <body>
    <div class="riwayat">
      <div class="navbar">
        <img class="logo" src="icon/Logo.svg" />
        <div class="menu">
          <div class="menu-text"><a href="../home/home.html">HOME</a></div>
              <div class="bulat"></div>
              <div class="menu-text"><a href="../peminjaman/peminjaman.html">PEMINJAMAN</a></div>
              <div class="bulat"></div>
              <div class="menu-text"><a href="./riwayat/riwayathtml.php">RIWAYAT</a></div>
              <div class="bulat"></div>
              <div class="menu-text"><a href="../Alur/alur.html">ALUR</a></div>
              <div class="bulat"></div>
              <div class="menu-text"><a href="../informasi/informasi.html">INFORMASI</a></div>
              <div class="bulat"></div>
                <div class="menu-text"><a href="../../index.html">KELUAR</a></div>
        </div>
      </div>
      <div class="riwayat-peminjaman">
        <div class="text-wrapper-2">RIWAYAT PEMINJAMAN</div>
        <div></div>
        <?php include("riwayat.php"); ?>
      </div>
      <footer class="footer">
        <div class="footer-item">Privacy Policy / Terms Of Service
        </div>
        <img class="footer-item" src="icon/Social Media.svg" />
        <div class="footer-item">© 2023 Alutsista</div>
      </footer>
    </div>
  </body>
</html>
