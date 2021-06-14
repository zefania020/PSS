<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
a = document.getElementById("result").value;
b = document.getElementById("jumlah").value;

document.form1.total.value = ((a * 1) * (b * 1));}
function stopCalc(){
clearInterval(interval);}
</script>

<script>
  function displayResult(color){
      document.getElementById("result").value=color;
  }
  function displayAlert(){
    var x=document.getElementById("result").value;
    if(x==""){
      alert("silahkan pilih warna print-an dokumen!");
          form.color[0].focus();
          return false;
    }
    else 
      alert(x + " adalah biaya per lembar");
  }
</script>

<script>
  $(document).ready(function(){
    $("#tanggal".datepicker({

    })
  })
</script>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesan Kaos || Print SukaSuka.com</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Print SukaSuka.com</a></h1>
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



    <div class="row" style="margin-top:10px;">
      <div class="small-12">

      <center><h2>Pesan Kaos</h2> </center>
      <br>

      <form name="form1" autocomplete="off" action="printkaos_controller.php" method="post">
     
      <table>
        <tr>
          <td>Masukkan desain</td>
          <td>:</td>
          <td><input class="input-group" type="file" name="desain" accept="image/*" required /></td>
        </tr>
        
        <tr>  
          <td>Pilihan produk </td>
          <td><input type="radio"  onclick="displayResult(this.value)" value="65000">Kaos : Rp 65000/kaos</td>
          <td><input type="radio"  onclick="displayResult(this.value)" value="135000">Jaket/Hoodie : Rp 135000/jaket</td>
        </tr>
        <tr>
          <td>Harga satuan</td>
          <td>: (klik kolom sekali)</td>
          <td>Rp <input type="int" maxlength="10" id="result" onfocus="startCalc();" onblur="stopCalc();" readonly></td>
        </tr>
        <tr>
            <td>Pilih ukuran</td>
            <td>:</td>
          <td>
            <select name="ukuran">
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Masukkan jumlah kaos</td>
          <td>:</td>
          <td>&nbsp &nbsp &nbsp<input type="int" id="jumlah" name="number" maxlength="10" required onfocus="startCalc();" onblur="stopCalc();"></td>
          <script type="text/javascript">  
          <?php echo $jsArray; ?>  
          </script> 
        </tr>
        <tr>
          <td>Total Harga</td>
          <td>:</td>
          <td>Rp <input type="int" name="total" maxlength="10" placeholder="" onchange='tryNumberFormat(this.form.thirdBox);' readonly></td>
        </tr>
        <tr>
          <td>Metode pengiriman</td>
          <td>1. Antar ke tempat<br>
            2. Jemput ke percetakan</td>
          <td>&nbsp &nbsp &nbsp<input type="int" name="metode" maxlength="10" required></td>
        </tr>
        <tr>
          <td>Alamat Pengiriman</td>
          <td>:</td>
          <td><textarea rows="3" type="varchar" name="alamat" maxlength="100" required></textarea></td>
        </tr>
        <tr>
          <td>Tanggal pengambilan/pengiriman</td>
          <td>:</td>
          <td><input type="date" name="tanggal" required></td>
        </tr>
      </table>

<center><input type="submit" value="pesan" name="pesan" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></center>


</form>

      


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



