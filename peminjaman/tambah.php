<?php
$head = 'Peminjaman';
$header = 'Selamat Datang';
require ('../layout/header.php');
// require ('conn_tambah.php');
 

 try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=siperpustakaan','root','1998');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

      // -- $carikode = mysqli_query($koneksi, "SELECT max(Trans_id) from borrow_transaction") or die (mysqli_error());
  $query = $koneksi->prepare("SELECT max(Trans_id) as kode from borrow_transaction");
    
      $query->execute();

$datakode = $query->fetchAll(PDO::FETCH_OBJ);
 foreach ($datakode as $koleksi){
      // echo $koleksi->kode;
 }

    $kode = $koleksi->kode;

    $datakode = $kode+1;


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
                                    <li><a href="http://localhost/rplkelompok5/koleksi/index.php">Umum</a></li>
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
                            <li><a href="login.php">Keanggotaan</a></li>
                            <li><a class="menu-top-active" data-toggle="dropdown" class="dropdown-toggle">Sirkulasi <span class="caret"></span></a>
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

              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Peminjaman Buku</h1>
                    </div>
                </div>
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
            <form method="post" action="simpan.php">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                    Masukan ID Anggota
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group" align="center">
                                        <div class="col-md-2"><label>ID Transaksi</label></div>
                                        <div class="col-md-3"><input type="text" name="Trans_id" class="form-control" value="<?php echo $datakode; ?>" disabled><br></div>
                                
                                    <!-- </div>
                                    <div class="form-group" align="center"> -->
                                        <div class="col-md-2"><label>ID Anggota</label></div>
                                        <div class="col-md-3"><input type="text" name="username" class="form-control" requaired autofocus><br></div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                    Masukan ID Buku
                            </div>
                            <div class="panel-body">
                            
                                
                                <div class="row">
                                <!-- <div class="col-md-2" align="center"><label>Jumlah Buku</label></div>
                                
                                <div class="col-md-2">
                                    <select class="form-control" name="jumlah">
                                          <option value="#">Choose...</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                    </select>
                                </div> -->
                                <div class="col-md-2"><p>*Maksimal 3 buku</p></div>
                                </div>
                                <div class="row">
                                    <div class="form-group" align="center">

                                        <div class="col-md-2"><label>ID Buku</label></div>
                                        <div class="col-md-3"><input type="text" name="Book_id1" class="form-control"><br></div>
                                        <div class="col-md-3"><input type="text" name="Book_id2" class="form-control" ><br></div>
                                        <div class="col-md-3"><input type="text" name="Book_id3" class="form-control"><br></div>
                                        <button type="submit" class="btn btn-info">Submit</button>    
                                        <script onclick="return konfirmasiPinjam()" type="text/javascript" language="JavaScript">
                                          function konfirmasiPinjam()
                                          {
                                          tanya = confirm("Anda Yakin Sudah Memasukan Data yang Benar ?");
                                          if (tanya == true) return true;
                                          else return false;
                                          }
                                          </script>
                                    </div>
                                    
                                </div>
                                
                                    
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
        
<?php require ('../layout/footer.php'); ?>