 <title>PrintkanHoi</title>
<link rel="shortcut icon" href="img/Logoweb.png">
<?php
   include("header.php");
   if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    redirect_to('index.php');
}

if (isset($_GET['id'])) {
                   $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        // Get the user id
        $id = getUserId($username, $password);
 } 
 
?>

<style type="text/css">
/*untuk tab*/
.nav-tabs {
  background-color: #dddddd;
  border-bottom: 1px solid #ddd;
  /*padding: 10px;*/
  padding-left: 10px;
  margin-bottom: 10px;
}

.nav-tabs > li {
  margin-bottom: -1px;
  width: 80px;
  text-align: center;
}

.nav-tabs > li > a {
  display: block;
  /*margin: 10px;*/
  color: black;
  text-decoration: none;
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: red;
/*  -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
          border-radius: 4px 4px 0 0;*/
}

.nav-tabs > li > a:hover {
  /*background-color: white;*/
  color: white;
  cursor: default;
  background-color: #333333;
}

/*.nav-tabs > .active > a,
.nav-tabs > .active > a:hover {
  color: white;
  cursor: default;
  background-color: #333333;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}*/
/*selesai tab*/
</style>
    <!-- Page Content -->
    <div class="container" style="background-color: white; padding: 40px; padding-top: 50px; padding-bottom: 350px">

      <h1 class="mt-4 mb-3">Riwayat Pencetakan</h1>

      <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Dokumen</a></li>
                    <li><a href="#tab2" data-toggle="tab">Foto</a></li>
                    <li><a href="#tab3" data-toggle="tab">Brosur</a></li>
                    <li><a href="#tab4" data-toggle="tab">Banner</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                      <!-- Content Row -->
                      <div class="row">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Dokumen</th>
                              <th>Kategori</th>
                              <th>Jumlah Halaman</th>
                              <th>Salinan</th>
                              <th>Keterangan</th>
                              <th>Total Harga</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          
                          <tbody>
                              <?php
                                $no = 0;
                                $query = "SELECT * FROM dokumen ";
                                $query .= "LEFT JOIN user ON dokumen.dokumen_user_id = user.id_user ";
                                $query .= "WHERE dokumen_user_id = '$id'";
                                $querydokumen = mysqli_query($mysqli,$query);
                                if(mysqli_num_rows($querydokumen)>0)
                                {
                                  while ($row = mysqli_fetch_array($querydokumen)) {
                                  
                                    $no++;
                                    $dokumen = $row['dokumen'];
                                    $kategori = $row['kategori'];
                                    $halaman = $row['halaman'];
                                    $salinan = $row['salinan'];
                                    $keterangan = $row['keterangan'];
                                    $harga = $row['harga'];
                                    $status = $row['status_dokumen'];
                                 
                                    echo "<tr>";
                                      echo "<td>".$no."</td>";
                                      echo "<td>$dokumen</td>";
                                      echo "<td>$kategori</td>";
                                      echo "<td>$halaman</td>";
                                      echo "<td>$salinan</td>";
                                      echo "<td>$keterangan</td>";
                                      echo "<td>$harga</td>";
                                      echo "<td>$status</td>";
                                    echo "</tr>";
                                  }
                                }
                                else{
                              ?>
                              <tr>
                                <th colspan="7" style="text-align: center;">Belum Ada Riwayat Pencetakan</th>
                              </tr>
                              <?php
                                }
                              ?>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="tab-pane" id="tab2">
                          <!-- Content Row -->
                          <div class="row">
                            <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>File Foto</th>
                              <th>Ukuran</th>
                              <th>Kategori</th>
                              <th>Jumlah</th>
                              <th>Keterangan</th>
                              <th>Total Harga</th>
                              <th>Status</th>
                          
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                               $no = 0;
                               $query = "SELECT * FROM foto ";
                              $query .= "LEFT JOIN user ON foto.foto_user_id = user.id_user ";
                              $query .= "WHERE foto_user_id = '$id'";
                              $querydokumen = mysqli_query($mysqli,$query);
                               if(mysqli_num_rows($querydokumen)>0)
                              {
                              while ($row = mysqli_fetch_array($querydokumen)) {
                                
                                $no++;
                                $user = $row['foto_user_id'];
                                    $foto = $row['foto'];
                                    $ukuran = $row['ukuran'];
                                    $kategori = $row['kategori_foto'];
                                    $jumlah = $row['jumlah_foto'];
                                    $keterangan = $row['keterangan_foto'];
                                    $harga = $row['harga_foto'];
                                $status = $row['status_foto'];
                               
                                echo "<tr>";
                                      echo "<td>".$no."</td>";
                                      echo "<td>$foto</td>";
                                      echo "<td>$ukuran</td>";
                                      echo "<td>$kategori</td>";
                                      echo "<td>$jumlah</td>";
                                      echo "<td>$keterangan</td>";
                                      echo "<td>$harga</td>";
                                  echo "<td>$status</td>";
                                echo "</tr>";
                              }
                            }
                              else{
                                ?>
                                <tr>
                            <th colspan="7" style="text-align: center;">Belum Ada Riwayat Pencetakan</th>
                            </tr>
                            <?php
                            }
                            ?>

                          </tbody>
                    </table>
                          </div>
                    </div>

                    <div class="tab-pane" id="tab3">
                        <!-- Content Row -->

                        <div class="row">
                          <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>File Brosur</th>
                            <th>Kategori</th>
                            <th>Jumlah Brosur</th>
                            <th>Keterangan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                             $no = 0;
                             $query = "SELECT * FROM brosur ";
                            $query .= "LEFT JOIN user ON brosur.brosur_user_id = user.id_user ";
                            $query .= "WHERE brosur_user_id = '$id'";
                            $querydokumen = mysqli_query($mysqli,$query);
                             if(mysqli_num_rows($querydokumen)>0)
                            {
                            while ($row = mysqli_fetch_array($querydokumen)) {
                              
                              $brosur = $row['brosur'];
                              $kategori = $row['kategori_brosur'];
                              $jumlah = $row['jumlah_brosur'];
                              $keterangan = $row['keterangan_brosur'];
                              $user = $row['brosur_user_id'];
                              $harga = $row['harga_brosur'];
                              $status = $row['status_brosur'];
                             
                              echo "<tr>";
                              echo "<td>".$no."</td>";
                                    echo "<td>$brosur</td>";
                                    echo "<td>$kategori</td>";
                                    echo "<td>$jumlah</td>";
                                    echo "<td>$keterangan</td>";
                                    echo "<td>$harga</td>";
                                echo "<td>$status</td>";
                              echo "</tr>";
                            }
                          }
                            else{
                              ?>
                              <tr>
                          <th colspan="7" style="text-align: center;">Belum Ada Riwayat Pencetakan</th>
                          </tr>
                          <?php
                          }
                          ?>

                        </tbody>
                  </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab4">
                        <!-- Content Row -->

                        <div class="row">
                          <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>File Banner</th>
                            <th>Ukuran</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                             $no = 0;
                             $query = "SELECT * FROM banner ";
                            $query .= "LEFT JOIN user ON banner.banner_user_id = user.id_user ";
                            $query .= "WHERE banner_user_id = '$id'";
                            $querydokumen = mysqli_query($mysqli,$query);
                             if(mysqli_num_rows($querydokumen)>0)
                            {
                            while ($row = mysqli_fetch_array($querydokumen)) {
                              
                              $no++;
                                  $banner = $row['banner'];
                                  $panjang = $row['panjang_banner'];
                                  $lebar = $row['lebar_banner'];
                                  $jumlah = $row['jumlah_banner'];
                                  $user = $row['banner_user_id'];
                                  $keterangan = $row['keterangan_banner'];
                                  $harga = $row['harga_banner'];
                             
                              echo "<tr>";
                                echo "<td>".$no."</td>";
                                    echo "<td>$banner</td>";
                                    echo "<td>$panjang x $lebar m</td>";
                                    echo "<td>$jumlah</td>";
                                    echo "<td>$keterangan</td>";
                                    echo "<td>$harga</td>";
                                echo "<td>$status</td>";
                              echo "</tr>";
                            }
                          }
                            else{
                              ?>
                              <tr>
                          <th colspan="7" style="text-align: center;">Belum Ada Riwayat Pencetakan</th>
                          </tr>
                          <?php
                          }
                          ?>

                        </tbody>
                  </table>
                        </div>
                    </div>
                </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
   include("footer.php");
?>
