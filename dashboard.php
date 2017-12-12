<?php
$head = 'Dashboard';
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
                            <li><a class="menu-top-active" href="dashboard.php">Dashboard</a></li>
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Koleksi <span class="caret"></span></a>
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
                            <li><a href="login.php">Keanggotaan</a></li>
                            <li><a data-toggle="dropdown" class="dropdown-toggle">Sirkulasi <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Peminjaman</a></li>
                                    <li><a href="#">Pengembalian</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="login.php">Buku Tamu</a></li>
                            <!-- <li><a href="login.php">Laporan</a></li> -->
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
                        <h1 class="page-head-line">Dashboard</h1>
                    </div>
            </div>
            <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-bookmark"></i></div>
                        <div class="s-widget-value">15</div>
                        <div class="s-widget-title">Total Koleksi</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-barcode"></i></div>
                        <div class="s-widget-value">10</div>
                        <div class="s-widget-title">Total Item</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-archive"></i></div>
                        <div class="s-widget-value">1</div>
                        <div class="s-widget-title">Total Dipinjam</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="s-widget-icon"><i class="fa fa-check"></i></div>
                        <div class="s-widget-value">9</div>
                        <div class="s-widget-title">Tersedia</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
                        <div class="panel-heading">
                            Buku Tamu
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> </th>
                                            <th>Nomor Anggota</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span class="glyphicon glyphicon-user" style="font-size: 100%;"></span></td>
                                            <td>A0003</td>
                                            <td>Mark Otto</td>
                                            <td>2017-12-01</td>
                                            <td>10:03:21</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span class="glyphicon glyphicon-user" style="font-size: 100%;"></span></td>
                                            <td>A0006</td>
                                            <td>Jacob Thornton</td>
                                            <td>2017-12-01</td>
                                            <td>07:24:23</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span class="glyphicon glyphicon-user" style="font-size: 100%;"></span></td>
                                            <td>A0010</td>
                                            <td>Larry the Bird</td>
                                            <td>2017-12-01</td>
                                            <td>07:27:06</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<?php require ('layout/footer.php'); ?>