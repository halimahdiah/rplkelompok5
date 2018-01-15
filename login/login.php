<?php
$head = 'Log In';
$header = 'Selamat Datang';
require ('../layout/header.php');
require ('connect.php');
//require ('layout/nav.php');
?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                </div>
            </div>
            <?php if(isset($ditemukan) && $ditemukan==false): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4><strong>Gagal !</strong></h4>ID / Password yang anda masukkan salah!
                      
                      
                </div>
                    
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">
                <form method="post" name="connect">
                    <label>Enter ID : </label>
                    <input type="text" class="form-control" name="username" requaired autofocus/>
                    <label>Enter Password :  </label>
                    <input type="password" class="form-control" name="password" />
                    <hr/>
                    <button type="submit" class="btn btn-info">Log In </button> 
                </form>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    Belum menjadi anggota?
                    Daftarlah <a href="http://localhost/rplkelompok5/forms.php">di sini</a>
                </div>
            </div> -->
        </div>
    </div>
    
    <?php require ('../layout/footer.php'); ?>