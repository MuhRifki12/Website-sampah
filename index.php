<?php
require 'system/config/koneksi.php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="shortcut icon" href="/asset/internal/img/img-local/favicon.ico">
  <link rel="stylesheet" href="asset/internal/css/style-index1.css">
  <link rel="stylesheet" href="asset/internal/css/style-index2.css">

  <script src="asset/internal/js/preloader.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>
</head>

<body>

  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="asset/internal/img/img-local/spiner.gif" width="80">
    </div>
  </div>


  <!--Navbar-->
  <header>
  <img src="gambar/logo_csn.png" width="65" style="position: absolute; top: 50%; left: 5%; transform: translate(-50%, -50%);">
  <img src="gambar/waste.png" width="400" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
  
  <nav>
      <a href="#" id="menu-icon"></a>
      <ul id="top-menu">
        <li style="list-style: none; display: inline"></li>
        <li class="active">
          <a href="#">BERANDA</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#foo">CONTENT</a>
        </li>
        <li style="list-style: none; display: inline"></li>
      </ul>
    </nav>
  </header>

  <!-- konten1 -->
  <div class="page-wrap">
    <div class="header">
      <div class="box-1">
        <h1>Sistem Informasi Sampah Organik dan Nonorganik Pada Pendekatan Ekonomi Sirkular</h1>
        <p> Memberikan data nilai jual tentang sampah organik dan anorganik </p>
        <br> <br>

        <div class="center">
          <a href="page/login.php" target="_blank">
            <div class="btn" align="center">Login</div>
          </a> <!-- End Btn -->
        </div>
      </div>
    </div>
  </div>
  </div>


  <!--konten2-->
  <div id="foo">
    <section class="team">
      <div class="container">
        <div class="row">
          <h1>Ekonomi sirkular</h1>
          <p>Implementasi Ekonomi Sirkular di Indonesia mengacu pada pendekatan ekonomi yang bertujuan untuk mengubah pola konsumsi dan produksi yang berpusat pada model linier (menghasilkan, menggunakan, membuang) menjadi model yang lebih berkelanjutan dan efisien dalam pemanfaatan sumber daya.</p>
          <p>Ekonomi sirkular berfokus pada prinsip-prinsip seperti mengurangi limbah dan polusi, memperpanjang umur pakai produk, meningkatkan efisiensi penggunaan sumber daya, dan mempromosikan daur ulang dan penggunaan kembali. Praktik ekonomi sirkular berusaha untuk menghindari limbah yang tidak perlu dan berupaya mempertahankan nilai dan manfaat dari produk dan material sebanyak mungkin dalam sistem ekonomi.</p>
          <p>Dalam konteks Indonesia, implementasi ekonomi sirkular memainkan peran penting dalam mengatasi tantangan lingkungan, seperti polusi, kerusakan ekosistem, dan peningkatan volume limbah. Hal ini juga dapat berkontribusi pada pembangunan berkelanjutan, menciptakan lapangan kerja baru, dan meningkatkan efisiensi sumber daya.
Beberapa langkah yang telah diambil.</p>
      </div>
    </section>
  </div>

  <div>
    
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--footer-->
  <footer class="footer-distributed">

    <div class="footer-left">

      <a href="#" id="logo_f"></a>
      <br>

      <p class="footer-links">
      <ul>
        <a href="#">BERANDA</a>
        ·
        <a href="#foo">CONTENT</a>

        </p>

        <p><font color="white">Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. All rights reserved.</font></p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p>Kecamatan Tanah Sareal, Kota Bogor.</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="sms:(+62)85780491805">(+62)857 8049 1805</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:rifkymohamed099@gmail.com">rifkymohamed099@gmail.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>Kunjungi Sosial Media Kami!</span>
        Untuk yang ingin lebih dekat dengan website monitoring sampah, silahkan kunjungi sosial media kami dibawah ini!
      </p>
      <div class="footer-icons">
        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/computersystem_network?igsh=bzRhdG5xcDhjeGtr" target="_blank"><i class="fa fa-instagram"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>