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
                            <li><a class="menu-top-active" href="index.html">Home</a></li>
                            
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Login <span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="login_anggota.php">Login Anggota</a></li>
                                                <li><a href="login.php">Login Petugas</a></li>
                                                
                                              </ul>
                                 
                            </li>
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
    </div>

<?php require ('layout/footer.php'); ?>