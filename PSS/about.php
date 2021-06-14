<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || PrintSukaSuka.com</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
          <li class="active"><a href="about.php">About</a></li>
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



    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <center><img src="images/about1.jpg" style="width: 190px; height: 200px;">
        <img src="images/about2.jpg" style="width: 190px; height: 200px;">
        <img src="images/about3.jpg" style="width: 190px; height: 200px;">
        <img src="images/about4.jpg" style="width: 190px; height: 200px;">
        <img src="images/about5.jpg" style="width: 190px; height: 200px;"></center>
        <p>
          <br>Mencetak untuk kebutuhan kantor maupun usaha di Indonesia bisa menjadi kegiatan yang cukup merepotkan dan memakan banyak waktu. Cara mencetak konvensional yang ribet dan merepotkan ini bisa menjadi penghalang untuk produktifitas.
          <br>
          <br>
          PrintSukaSuka hadir untuk mengubah pengalaman mencetak menjadi lebih mudah dan efisien. Teknologi yang dimiliki PrintSukaSuka menjadi solusi dan jawaban atas kesulitan mencetak.
          Aplikasi ini diharapkan dapat menjawab persoalan yang terjadi pada masyarakat saat ini baik dilingkungan sekolah,perkantoran,universitas dan lingkungan kerja. Jadi, jika Anda tertarik, kunjungi wensite kami di 
        <a href="index.php" target="_blank" title="Print SukaSuka.com Solutions">PrintSukaSuka.com</a>.</p>

          <br>
          <div class="col-md-3">
          PrintSukaSuka menawarkan harga terbaik untuk produk berkualitas tinggi yang kami berikan. </div>
        <p>
        Share to : <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="https://www.facebook.com">Facebook</a><br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="https://instagram.com">Instagram</a><br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="https://twitter.com">Twitter</a>

        </p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; PrintSukaSuka.com. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
