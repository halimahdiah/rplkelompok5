<?php
$head = 'Home';
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
                            <li><a class="menu-top-active" href="http:/rplkelompok5/home.php">Home</a></li>
                             
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Koleksi <span class="caret"></span></a>
                            <!-- <li> -->
                            <!-- <div class="btn-group"> -->
											  <!-- <div class="btn btn-primary dropdown-toggle"><span class="caret"></span></div> -->
											  
											  <ul class="dropdown-menu">
											  	<li><a href="http://localhost/rplkelompok5/koleksi/index.php">Semua Koleksi</a></li>
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
											<!-- </div> -->
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
                <h1 class="page-head-line">Home</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form>
                	<div class="input-group input-group-lg">
                		
                		<input type="text" class="form-control" placeholder="Search for..." name="keyword"/>
        	        	<span class="input-group-btn">
        	        	<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
        	        	</span>
                	</div>
                </form>
            </div>
        </div>
        <hr>
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



<?php require ('layout/footer.php'); ?>