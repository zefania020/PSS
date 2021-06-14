<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if (isset($_GET['id'])){
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $id = getUserId($username, $password);
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan || PrintSukaSuka.com</title>
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
          <li class="active"><a href="cart.php">Order</a></li>
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
    <?php 
      if(isset($_SESSION['username'])){
    ?>
      <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <center><h3>Daftar Pesanan</h3></center>
        <table>
          <tr>
            <td>
              <center><h3>Pesanan Print Dokumen</h3></center>
              <?php 

            $query="SELECT * FROM print_documen";
            $hasil=$mysqli->query($query);

            if ($hasil->num_rows > 0) {
              foreach ($hasil as $row) {
                
              }
              ?>
              <br>
              <a href="edit_doc.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
              <a href="delete_doc.php?id=<?php echo $row['id']; ?>"><button>Delete</button></a>
              <tr><td>ID pemesanan</td><td> : <?php echo $row['id']; ?></td></tr>
              <tr><td>Document</td> <td>: <?php echo $row['document']; ?></td></tr>
              <tr><td>Jumlah halaman</td><td> : <?php echo $row['jumlah']; ?></td></tr>
              <tr><td>Total harga</td><td> : <?php echo $row['total']; ?></td></tr>
              <tr><td>Metode pengiriman</td><td> : <?php echo $row['metode']; ?></td></tr>
              <tr><td>Tanggal pengiriman/penjemputan</td><td> : <?php echo $row['tanggal']; ?></td></tr>
              <tr><td>Alamat</td><td> : <?php   echo $row['alamat'] ?></td></tr>
              <?php 
            }

           ?>
            </td>
            <td>
              <center><h3>Pesanan Kaos</h3></center>
              <?php 

  $query="SELECT * FROM print_kaos";
  $hasil=$mysqli->query($query);

  if ($hasil->num_rows > 0) {
    foreach ($hasil as $row) {
      
    }
    ?>
    <a href="edit_kaos.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
    <a href="delete.php?id=<?php echo $row['id']; ?>"><button>Delete</button></a>
    <tr><td>ID pemesanan</td><td> : <?php echo $row['id']; ?></td></tr>
    <tr><td>Ukuran Kaos</td><td> : <?php echo $row['ukuran']; ?></td></tr>
    <tr><td>Desain kaos</td> <td>: <?php echo $row['desain']; ?></td></tr>
    <tr><td>Jumlah kaos</td><td> : <?php echo $row['jumlah']; ?></td></tr>
    <tr><td>Total harga</td><td> : <?php echo $row['total']; ?></td></tr>
    <tr><td>Metode pengiriman</td><td> : <?php echo $row['metode']; ?></td></tr>
    <tr><td>Tanggal pengiriman/penjemputan</td><td> : <?php echo $row['tanggal']; ?></td></tr>
    <tr><td>Alamat</td><td> : <?php   echo $row['alamat']; ?></td></tr>
    <?php 
  }

 ?>
            </td>
            <td>
              <center><h3>Pesanan Spanduk</h3></center>
              <?php 

  $query="SELECT * FROM print_spanduk";
  $hasil=$mysqli->query($query);

  if ($hasil->num_rows > 0) {
    foreach ($hasil as $row) {
      
    }
    ?>
    <a href="edit_spanduk.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
        <a href="delete_span.php?id=<?php echo $row['id']; ?>"><button>delete</button></a>
    <tr><td>ID pemesanan</td><td> : <?php echo $row['id']; ?></td></tr>
    <tr><td>Desain spanduk</td> <td>: <?php echo $row['spanduk']; ?></td></tr>
    <tr><td>Ukuran spanduk</td><td>panjang &nbsp&nbsp <?php echo $row['panjang']; ?><br>
                                  lebar &nbsp &nbsp &nbsp &nbsp <?php echo $row['lebar']; ?></td></tr>

    <tr><td>Jumlah spanduk</td><td> : <?php echo $row['jumlah']; ?></td></tr>
    <tr><td>Total harga</td><td> : <?php echo $row['total']; ?></td></tr>
    <tr><td>Alamat</td><td> : <?php   echo $row['alamat'] ?></td></tr>
    <tr><td>Metode pengiriman</td><td> : <?php echo $row['metode']; ?></td></tr>
    <tr><td>Tanggal pengiriman/penjemputan</td><td> : <?php echo $row['tanggal']; ?></td></tr>
    <tr><td>Alamat</td><td> : <?php   echo $row['alamat'] ?></td></tr>
    <?php 
  }

 ?>
            </td>
          </tr>
        </table>
        </div>
      </div>

      
    <?php 
      }
    ?>
    
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
