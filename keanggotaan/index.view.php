<?php
$head = 'Keanggotaan';
$header = 'Selamat Datang';
require ('../layout/header.php');
//require ('layout/nav.php');
?>


<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['usernameA'])): ?>
                              <li><a href="http://localhost/rplkelompok5/home.php">Home</a></li>
                            <?php endif ?>
                            <?php if (isset($_SESSION['usernameP'])): ?>
                              <li><a href="http://localhost/rplkelompok5/dashboard.php">Dashboard</a></li>
                            <?php endif ?>
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Koleksi <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index.php">Semua Koleksi</a></li>
                                    <li><a onclick="return umum()" href="http://localhost/rplkelompok5/koleksi/index.php">Umum</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_filsafat.php">Filsafat</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_agama.php">Agama</a></li>                                                
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_sosial.php">Sosial</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_bahasa.php">Bahasa</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_ilmu_murni.php">Ilmu Murni</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_ilmu_terapan.php">Ilmu Terapan</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_kesenian.php">Kesenian</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_kesusasteraan.php">Kesusasteraan</a></li>
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index_ilmu_bumi.php">Ilmu Bumi</a></li>
                                </ul>
                            </li>
                            <?php if (isset($_SESSION['usernameP'])): ?>
                            <li><a class="menu-top-active" href="http://localhost/rplkelompok5/keanggotaan/index.php">Keanggotaan</a></li>
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Sirkulasi <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://localhost/rplkelompok5/peminjaman/index.php">Peminjaman</a></li>
                                    <li><a href="#">Pengembalian</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="login.php">Buku Tamu</a></li>
                            <!-- <li><a href="login.php">Laporan</a></li> -->
                        <?php endif ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->


<div class="content-wrapper">
        <div class="container">
          <?php if (isset($_SESSION['succes'])): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4><strong>Sukses !</strong></h4><?= $_SESSION['succes'] ?>
    </div>
  <?php endif; ?>
  <?php unset($_SESSION['succes']) ?>

  <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4><strong>Gagal !</strong></h4><?= $_SESSION['error'] ?>
    </div>
  <?php endif; ?>
  <?php unset($_SESSION['error']) ?>
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Keanggotaan
                        </div>
                        <div class="panel-body">
                        
                        <div class="col-md-8">
                        <?php if (isset($_SESSION['usernameP'])): ?>
                        <a class="btn btn-success" id="edit_data" data-toggle="modal" data-target="#exampleModal" href="tambah.php"><span class="glyphicon glyphicon-plus"></span> Tambah Anggota</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
                        <a class="btn btn-success" href="print.php" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
                        <!-- <a class="btn btn-success" id="edit_data" data-toggle="modal" data-target="#exampleModal" href="#"><span class="glyphicon glyphicon-import"></span> Import</a>
                        <a class="btn btn-success" id="edit_data" data-toggle="modal" data-target="#exampleModal" href="#"><span class="glyphicon glyphicon-export"></span> Export</a> -->
                        
                        <?php endif ?>
                        </div>
                          <div class="col-md-4">
                              <form method="post" action="search_exe.php">
                                <div class="input-group input-group">
                                  
                                  <input type="text" class="form-control" placeholder="Search for..." name="keyword">
                                  <span class="input-group-btn">
                                  <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
                                  </span>
                                </div>
                              </form>
                          </div>
                      <!-- </div> -->
                        <br><br>
                        
                        
                            <div class="table-responsive">
                            
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>ID Anggota</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pekerjaan</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($daftar_anggota as $anggota): ?>
                                    <tr>
                                      <td>
                                        <?= $anggota->username ?>
                                      </td>
                                      <td>
                                        <?= $anggota->nama ?>
                                      </td>
                                      <td>
                                        <?= $anggota->jk ?>
                                      </td>
                                      <td>
                                        <?= $anggota->tempat_lahir ?>
                                        <?= $anggota->tanggal_lahir ?>
                                      </td>
                                      <td>
                                        <?= $anggota->alamat ?>
                                      </td>
                                      <td>
                                        <?= $anggota->telepon ?>
                                      </td>
                                      <td>
                                        <?= $anggota->pekerjaan ?>
                                      </td>
                                      <td>
                                        <?= $anggota->email ?>
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- js untuk jquery -->
<!--  // <script src="../assets/js/jquery-1.11.1.js"></script>
 // js untuk bootstrap
 // <script src="../assets/js/bootstrap.js"></script> -->



<?php require ('../layout/footer.php'); ?>

 <script type="text/javascript">
  $(document).ready(function(){
   $('a#edit_data').click(function(){
    var url = $(this).attr('href');
    $.ajax({
     url : url,
     success:function(response){
      $('#exampleModal').html(response);
     }
    });
   });
   
  });
 </script>