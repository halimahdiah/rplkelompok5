<?php 
    $Host = "localhost";
    $username = "root";
    $password = "1998";
    $database = "siperpustakaan";
    $koneksi = mysqli_connect($Host, $username, $password, $database );
    
    if (!$koneksi){
        die ("CONECTION GAGAL :". mysqli_connect_error());
    }

      $carikode = mysqli_query($koneksi, "SELECT max(username) from anggota") or die (mysqli_error());
      
      $datakode = mysqli_fetch_array($carikode);

      if ($datakode) {
       $nilaikode = substr($datakode[0], 1);
       
       $kode = (int) $nilaikode;
       
       $kode = $kode + 1;
       $kode_otomatis = "A".str_pad($kode, 5, "0", STR_PAD_LEFT);
      
      } else {
      
       $kode_otomatis = "A00001";
      
      }
// if (isset($_POST["cek"])) {
//         $username = $_POST["username"];
//         $nama = $_POST["nama"];
//         //$harga = $_POST["harga"];

//         $sql = mysqli_query($koneksi, "INSERT INTO anggota VALUES('$no','$nama_barang','$harga')");
//         header ("location:forms.php");
//     }

    //$gg = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<?php
$head = 'Form Pendaftaran';
$header = 'Selamat Datang';
require ('layout/header.php');
//require ('layout/nav.php');
?>
   <!--  <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="ui.html">UI Elements</a></li>
                            <li><a href="table.html">Data Tables</a></li>
                            <li><a class="menu-top-active"  href="forms.html">Forms</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Form Pendaftaran Anggota</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                    ID dan Password 
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label>ID Anggota</label>
                                        <input type="text" class="form-control" name="username" disabled value="<?php echo $kode_otomatis ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password Lagi" name="passwordkonfirmasi" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                    Data Diri Anda 
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Enter Nama Lengkap" name="name" />
                                    </div>
                                    <div class="form-inline">
                                        <label style="display: block">Jenis Kelamin</label>
                                            <div class="row col-md-2">
                                                <input type="radio" name="jk" id="optionsRadios2" value="laki-laki" checked />
                                                Laki-laki
                                            </div>
                                            <!-- <div class="row col-md-2"> -->
                                                <input type="radio" name="jk" id="optionsRadios2" value="perempuan" />
                                                Perempuan
                                            <!-- </div> -->
                                    </div>
                                    <div class="form-inline">
                                        <label style="display: block">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="tempat-lahir" placeholder="Tempat Lahir" />
                                        <input type="date" class="form-control" name="tgl-lahir" />
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telepon / Handphone</label>
                                        <input type="text" class="form-control" name="telepon" />
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" />
                                    </div>
                                    <div class="form-group">
                                        <label>Foto User</label>
                                        <input type="file"/>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-info">Submit</button> -->
                                    <a href="login_anggota.php" class="btn btn-info">Submit</a>
                                    

                                    <!--  Modals-->
                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                      Cancel
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                            
                                          </div>
                                          <div class="modal-body">
                                            Anda yakin ingin membatalkan pendaftaran?
                                          </div>
                                          <div class="modal-footer">
                                            
                                            <a href="login_anggota.php" class="btn btn-default">Yes</a>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>                     
                                    <!-- End Modals-->                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        
<?php require ('layout/footer.php'); ?>