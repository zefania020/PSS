<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || PrintSukaSuka.com</title>
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
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Hey Admin!</h3>

        <h4>Daftar Print Dokumen</h4>
       <?php 
        $qdoc="SELECT * FROM print_documen";
        $hdoc=$mysqli->query($qdoc);
         ?>

        <table border="1">
          <tr>
            <th>ID</th>
            <th>Nama file</th>
            <th>Jumlah Halaman</th>
            <th>Total Harga</th>
            <th>Metode</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Download</th>
          </tr>
          <tr>

            <?php 
          if ($hdoc->num_rows > 0) {
          foreach ($hdoc as $rowdoc) {
           
           ?>

          
            <td><?php echo $rowdoc['id']; ?></td>
            <td><?php echo $rowdoc['document']; ?></td>
            <td><?php echo $rowdoc['jumlah']; ?></td>
            <td><?php echo $rowdoc['total']; ?></td>
            <td><?php echo $rowdoc['metode']; ?></td>
            <td><?php echo $rowdoc['alamat']; ?></td>
            <td><?php echo $rowdoc['tanggal']; ?></td>
            <td><a href="download.php?id=<?php $rowdoc['id'] ?>">Download</a></td>
          </tr>
          <?php }
          } ?>
        </table>


<h4>Daftar Print Kaos</h4>
       <?php 
        $qkaos="SELECT * FROM print_kaos";
        $hkaos=$mysqli->query($qkaos);
         ?>

        <table border="1">
          <tr>
            <th>ID</th>
            <th>Nama file</th>
            <th>Jumlah Kaos</th>
            <th>Ukuran Kaos</th>
            <th>Total Harga</th>
            <th>Metode</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Download</th>
          </tr>
          <tr>

            <?php 
          if ($hkaos->num_rows > 0) {
          foreach ($hkaos as $rowkaos) {
           
           ?>

          
            <td><?php echo $rowkaos['id']; ?></td>
            <td><?php echo $rowkaos['desain']; ?></td>
            <td><?php echo $rowkaos['jumlah']; ?></td>
            <td><?php echo $rowkaos['ukuran']; ?></td>
            <td><?php echo $rowkaos['total']; ?></td>
            <td><?php echo $rowkaos['metode']; ?></td>
            <td><?php echo $rowkaos['alamat']; ?></td>
            <td><?php echo $rowkaos['tanggal']; ?></td>
            <td><a href="download.php?id=<?php $rowkaos['id'] ?>">Download</a></td>
          </tr>
          <?php }
          } ?>
        </table>


<h4>Daftar Print Spanduk</h4>
       <?php 
        $qspanduk="SELECT * FROM print_spanduk";
        $hspanduk=$mysqli->query($qspanduk);
         ?>

        <table border="1">
          <tr>
            <th>ID</th>
            <th>Nama file</th>
            <th>Jumlah Spanduk</th>
            <th>Panjang Spanduk</th>
            <th>Lebar Spanduk</th>
            <th>Kualitas Spanduk</th>
            <th>Total Harga</th>
            <th>Metode</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Download</th>
          </tr>
          <tr>

            <?php 
          if ($hspanduk->num_rows > 0) {
          foreach ($hspanduk as $rowspanduk) {
           
           ?>

          
            <td><?php echo $rowspanduk['id']; ?></td>
            <td><?php echo $rowspanduk['spanduk']; ?></td>
            <td><?php echo $rowspanduk['jumlah']; ?></td>
            <td><?php echo $rowspanduk['panjang']; ?></td>
            <td><?php echo $rowspanduk['lebar']; ?></td>
            <td><?php echo $rowspanduk['kualitas']; ?></td>
            <td><?php echo $rowspanduk['total']; ?></td>
            <td><?php echo $rowspanduk['metode']; ?></td>
            <td><?php echo $rowspanduk['alamat']; ?></td>
            <td><?php echo $rowspanduk['tanggal']; ?></td>
            <td><a href="download.php?id=<?php $rowspanduk['id'] ?>">Download</a></td>
          </tr>
          <?php }
          } ?>
        </table>

      </div>
    </div>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center><p><input style="clear:both;" type="submit" class="button" value="Update"></p></center>
        </form>
        <footer style="margin-top:10px;">
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
