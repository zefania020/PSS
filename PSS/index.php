<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PrintSukaSuka.com</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/glyphicon.css" rel="stylesheet">
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">

        <li class="name">
          <h1><a href="index.php">PrintSukaSuka.com</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Product</a></li>
          <?php 
          if(isset($_SESSION['username'])){
            echo '<li><a href="cart.php">Order</a></li>';
          } ?>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
          <table>
        <center><div class="carousel-inner" role="listbox" style="width: 1360px; height: 530px"> 
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active"> <img width="100%" height="100%" src="images/carousel1.png" style="position: center">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item"> <img width="100%" height="100%" src="images/carousel2.png" style="position: center" >
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item"> <img width="100%" height="100%" src="images/carousel3.jpg" style="position: center">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
      </center>
      </table>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="jquery/bootstrap.min.js"></script>

  

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

      <!-- Wrapper for slides -->
      <p style="margin-left: 200px; margin-right: 200px">
      <br>
      
      PrintSukaSuka memberikan layanan cetak untuk kebutuhan personal atau bisnis perusahaan Anda mulai dari packaging hingga kebutuhan marketing dengan lebih cepat dan murah. PrintSukaSuka sangat mengedepankan kualitas produk dengan menggunakan material dan teknologi cetak printing terbaik. Produk final PrintSukaSuka dikerjakan oleh tangan-tangan terampil untuk menjamin kualitas setiap cetakan dengan fasilitas online printing yang dapat diakses kapanpun di manapun. Tidak perlu khawatir jika Anda belum memiliki desain! Kami menghadirkan ratusan desain template dan layout guideline yang lengkap untuk berbagai bidang pekerjaan, cukup klik, dan gunakan. Tersedia pilihan jasa cetak satu hari jadi untuk Anda yang membutuhkan cetak sesegera mungkin. Hadir juga pilihan pengiriman yang lebih hemat yaitu Fast Delivery (2-3 hari).
      <br>
      <br>
      PrintSukaSuka juga memberikan jasa cetak online yang lebih mudah, cepat dan murah dengan menggunakan desain custom yang Anda miliki, sehingga Anda tidak perlu repot keluar ruangan, buang waktu, dan antri berjam-jam lagi hanya untuk pergi ke tempat percetakan. Anda yang ingin cetak desain custom untuk bisnis personal atau perusahaan kami memberikan solusi cetak brosur, booklet, greeting card, map, company profile, id card, tote bag, mug, tumbler, kalender. Anda yang ingin cetak desain custom usaha makanan & minuman kami memberikan solusi cetak buku menu, table mat, tent card, kemasan, membership / loyality card, paper bag, coaster, stiker / label, voucher makan. Anda yang ingin cetak custom desain usaha event organizer kami memberikan solusi cetak undangan, booklet, thank you card, portofolio book, photo book, bantal, foto, canvas, greeting card, magnet, frame art, tote bag.
      <br>
      <br>
      Tidak hanya itu, PrintSukaSuka juga bekerja sama dengan beberapa klien yang tersebar di seluruh kota kota besar di seluruh wilayah Indonesia seperti Jakarta, Bandung, Bekasi, Surabaya, Denpasar, hingga Makassar. Hal ini tentu memudahkan tim kami untuk melakukan proses shipping ke berbagai daerah di Indonesia.
</p>
<left>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">
      </div>
    </div>
  </left>
       <center>
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; PrintSukaSuka.com All Rights Reserved.</p>
        </footer>
</center>
      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


