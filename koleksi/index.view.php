<?php
$head = 'Koleksi';
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
                            <li><a href="http:/rplkelompok5/home.php">Home</a></li>
                            <li><a class="menu-top-active" data-toggle="dropdown" class="dropdown-toggle">Koleksi <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Semua Koleksi</a></li>
                                    <li><a href="#">Umum</a></li>
                                    <li><a href="#">Filsafat</a></li>
                                    <li><a href="#">Agama</a></li>                                                
                                    <li><a href="#">Sosial</a></li>
                                    <li><a href="#">Bahasa</a></li>
                                    <li><a href="#">Ilmu Murni</a></li>
                                    <li><a href="#">Ilmu Terapan</a></li>
                                    <li><a href="#">Kesenian</a></li>
                                    <li><a href="#">Kesusasteraan</a></li>
                                    <li><a href="#">Ilmu Bumi</a></li>
                                </ul>
                            </li>
                            <?php if (isset($_SESSION['usernameP'])): ?>
                            <li><a href="login.php">Keanggotaan</a></li>
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Sirkulasi <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Peminjaman</a></li>
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
<!-- 
  <?php if (isset($_SESSION['error'])): ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4><strong>Gagal !</strong></h4><?= $_SESSION['error'] ?>
  </div>
  <?php endif; ?> -->
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Semua Koleksi
                        </div>
                        <div class="panel-body">
                        <?php if (isset($_SESSION['usernameP'])): ?>
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Tambah Koleksi</button>

                        <br><br>
                        <?php endif ?>
                            <div class="table-responsive">
                            
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>ID Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Lokasi</th>
                                            <th>Jumlah</th>
                                            <?php if (isset($_SESSION['usernameP'])): ?>
                                            <th style="text-align: center">Aksi</th>
                                            <?php endif ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($daftar_koleksi as $koleksi): ?>
                                    <tr>
                                      <td>
                                        <?= $koleksi->Book_id ?>
                                      </td>
                                      <td>
                                        <?= $koleksi->Title ?>
                                      </td>
                                      <td>
                                        <?= $koleksi->Author ?>
                                      </td>
                                      <td>
                                        <?= $koleksi->Location ?>
                                      </td>
                                      <td>
                                        <?= $koleksi->Jumlah_copy ?>
                                      </td>
                                      <?php if (isset($_SESSION['usernameP'])): ?>
                                        <td style="text-align: center">
                                                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                <i class=" fa fa-eye "></i>
                                                </button> -->
                                                <a class="btn btn-info" id="edit_data" data-toggle="modal" data-target="#exampleModal" href="modal_index.php?Book_id=<?= $koleksi->Book_id ?>"><i class=" fa fa-eye"></i></a>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>


                                      <?php endif; ?>
                                      <?php if (isset($_SESSION['usernameP'])): ?>
                                                <!-- <button class="btn btn-warning"><i class="fa fa-edit "></i></button> -->
                                                <a class="btn btn-warning" id="edit_data" data-toggle="modal" data-target="#exampleModal" href="edit.php?Book_id=<?= $koleksi->Book_id ?>"><i class="fa fa-edit"></i></a>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>

 
                                      <?php endif; ?>
                                      <?php if (isset($_SESSION['usernameP'])): ?>
                                                <!-- <button class="btn btn-danger"><i class="fa fa-trash"></i></button> -->
                                                <script type="text/javascript" language="JavaScript">
                                                 function konfirmasiHapus()
                                                 {
                                                 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                                                 if (tanya == true) return true;
                                                 else return false;
                                                 }
                                                </script>
                                                <a onclick="return konfirmasiHapus()" href="delete.php?Book_id=<?= $koleksi->Book_id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                      <?php endif; ?>
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