<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print || PrintSukaSuka.com</title>
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
          <li><a href="about.php">About</a></li>
          <li class='active'><a href="products.php">Product</a></li>
         
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




    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <div class="large-4 columns">
          <center><h3>Print Dokumen</h3></center><br>
          <img src="images/product.jpg" style="width: 300px; height: 250px;"><br><br>
          <strong>Product Code</strong>: PRINT01<br>
          <strong>Description</strong> &nbsp : Layanan print dokumen pribadi, undangan, foto dan lain sebagainya.<br>
          <strong>Price/sheet</strong> &nbsp &nbsp: Rp 500<br>
          <?php   
          if(isset($_SESSION['username'])){
           ?>
                     
          <center><a href="pesan_doc.php"><input type="submit" Value="Pesan" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" ></a></center>
          <?php  
            }
          ?>
          <br>
        </div>

        <div class="large-4 columns">
          <center><h3>Print Banner</h3></center><br>
          <img src="images/product2.jpg" style="width: 300px; height: 250px;"><br><br>
          <strong>Product Code</strong>: PRINT02<br>
          <strong>Description</strong> &nbsp : Tersedia layanan untuk cetak spanduk, banner, baliho, walpaper dinding dan lainnya.<br>
          <strong>Price/meters</strong> &nbsp  : Rp 100000<br>
          <?php   
          if(isset($_SESSION['username'])){
           ?>
          <center><a href="pesan_spanduk.php"><input type="submit" Value="Pesan" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" ></a></center>
          <?php  
            }
          ?>
          <br>
        </div>
        
        <div class="large-4 columns">
          <center><h3>Print Kaos</h3></center><br>
          <img src="images/product3.jpg" style="width: 300px; height: 250px;"><br><br>
          <strong>Product Code</strong>: PRINT03<br>
          <strong>Description</strong> &nbsp : Tersedia layanan untuk sablon kaos, kemeja, jaket dan pakaian lainnya.<br>
          <strong>Price/kaos</strong> &nbsp &nbsp : Rp 65000<br>
          <?php   
          if(isset($_SESSION['username'])){
           ?>
          <center><a href="pesan_kaos.php"><input type="submit" Value="Pesan" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" ></a></center>
          <?php  
            }
          ?>
          <br>
        </div>
      </div>
      </div>
        <div class="row" style="margin-top:10px;">
          <div class="small-12">

        <footer style="margin-top:10px;">
        
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; PrintSukaSuka.com. All Rights Reserved.</p>
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
