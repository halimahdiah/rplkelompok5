<?php
$head = 'Log In';
$header = 'Selamat Datang';
require ('layout/header.php');
//require ('layout/nav.php');
?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Enter Nomor Petugas : </label>
                    <input type="text" class="form-control" name="petugas" />
                    <label>Enter Password :  </label>
                    <input type="password" class="form-control" name="password" />
                    <hr/>
                    <a href="dashboard.php" class="btn btn-info">Log In </a> 
                </div>
            </div>
           
        </div>
    </div>
    
    <?php require ('layout/footer.php'); ?>