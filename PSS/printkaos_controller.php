
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<?php include 'config.php' ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PrintSukaSuka.com</title>
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
          <li><a href="products.php">Product</a></li>
          <li><a href="cart.php">Order</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

 <div class="row">
  <br>
  <br>
  <br>
 
 <?php   
 	
 	if (isset($_POST['pesan'])){
      $desain = $_POST['desain'];
      $jumlah = $_POST['number'];
      $total = $_POST['total'];
      $metode = $_POST['metode'];
      $alamat = $_POST['alamat'];
      $tanggal = $_POST['tanggal'];
      $ukuran = $_POST['ukuran'];


      $print_kaos = "INSERT INTO print_kaos (desain, jumlah, total, metode, alamat, tanggal, ukuran) VALUES('$desain', '$jumlah', '$total', '$metode', '$alamat', '$tanggal', '$ukuran')";

      if(mysqli_query($mysqli, $print_kaos )){
        echo "<center>Pesanan anda telah terkirim</center>";
      }
      else{
        echo "<center>Pesanan tidak berhasil dilakukan</center>";
      }
    }

     ?>
<br>
<br>
     <a href="dpesanan_kaos.php"><center><button>Lihat</button></center></a>
</div>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; PrintSukaSuka.com All Rights Reserved.</p>
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
