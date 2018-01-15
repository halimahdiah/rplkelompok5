<?php
$head = 'Sistem Informasi Pendaftaran';
$header = 'Selamat Datang';
require ('layout/header.php');
//require ('layout/nav.php');
?>

	<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="http://localhost/rplkelompok5/index.php">Home</a></li>
                            <?php if (isset($_SESSION['usernameA'])): ?>
                                <li><a href="http://localhost/rplkelompok5/home.php">Anggota</a></li>
                            <?php elseif (isset($_SESSION['usernameP'])): ?>
                                <li><a href="http://localhost/rplkelompok5/dashboard.php">Petugas</a></li>
                            
                            
                            <?php endif; ?>
                            
                            <li><a href="http://localhost/rplkelompok5/login/login.php">Log In</a></li>
                            <li><a href="http://localhost/rplkelompok5/forms.php">Sign In</a></li>
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
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-book"></i></div>
                        <div class="s-widget-value">100</div>
                        <div class="s-widget-title">Total Item / Buku</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-user"></i></div>
                        <div class="s-widget-value">20</div>
                        <div class="s-widget-title">Total Anggota</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-users"></i></div>
                        <div class="s-widget-value">0</div>
                        <div class="s-widget-title">Total Pengunjung Hari Ini</div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-check"></i></div>
                        <div class="s-widget-value">100</div>
                        <div class="s-widget-title">Tersedia</div>
                    </div>
                </div>
            </div> -->
        </div>
        <hr/>
        <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        
                        <div class="panel-body" align="center">
                            <img src="http://localhost/rplkelompok5/image/images_001.jpg" width="50%">
                            <h4>Basis Data Revisi Kedua</h4>
                            <p><i>Fathansyah</i></p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        
                        <div class="panel-body" align="center">
                            <img src="http://localhost/rplkelompok5/image/images_002.jpg" width="50%">
                            <h4>Bintang</h4>
                            <p><i>Tere Liye</i></p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        
                        <div class="panel-body" align="center">
                            <img src="http://localhost/rplkelompok5/image/images_003.jpg" width="50%">
                            <h4>Ilmu Bahan Bangunan</h4>
                            <p><i>Dwi Yanthi Winoto</i></p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                        
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        
                        <div class="panel-body" align="center">
                            <img src="http://localhost/rplkelompok5/image/images_004.jpg" width="50%">
                            <h4>Jalan Jalan: A Novel of Indonesia</h4>
                            <p><i>Mike Stoner</i></p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        
                        <div class="panel-body" align="center">
                            <img src="http://localhost/rplkelompok5/image/images_005.jpg" width="50%">
                            <h4>The Power of Digital Marketing</h4>
                            <p><i>Gm Susanto</i></p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        
                        <div class="panel-body" align="center">
                            <img src="http://localhost/rplkelompok5/image/images_006.jpg" width="50%">
                            <h4>Keperawatan Medikal Bedah: Sistem Kardiovaskular</h4>
                            <p><i>M. Asikin - M. Nuralamsyah - Susaldi</i></p>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        <div class="row">
                			<div class="col-md-6">
                    			<img class="img-rounded" src="http://localhost/rplkelompok5/image/images_146.jpg" width="100%">
                    		</div>             
                    	
                			<div class="col-md-6" align="justify">
                    			Sistem Informasi Perpustakaan merupakan suatu sistem yang dapat mempermudah dalam mengakses informasi seputar perpustakaan.
                    			Sistem Informasi Perpustakaan bertujuan agar dapat mempermudah dan mempersingkat waktu pelayanan dalam perpustakaan.
                    		</div>
                		</div>
            		</div>
                </div>
            </div>
            <hr/>
            <div class="row" align="center">
                <div class="col-md-6">
                    <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            	Petugas Perpustakaan
                            </div>
                            <div class="panel-body">
                            	Layanan Sistem Informasi Perpustakaan untuk petugas perpustakaan
                            </div>
                            <div class="panel-footer">
                                <a href="login.php" class="btn btn-info">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            	Anggota Perpustakaan
                            </div>
                            <div class="panel-body">
                            	Layanan Sistem Informasi Perpustakaan untuk anggota perpustakaan
                            </div>
                            <div class="panel-footer">
                                <a href="login_anggota.php" class="btn btn-info">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<?php require ('layout/footer.php'); ?>