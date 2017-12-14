<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title><?= $head ?></title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="http://localhost/rplkelompok5/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="http://localhost/rplkelompok5/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="http://localhost/rplkelompok5/assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            
        <div class="left-div" align="center">
            <a style="text-decoration: none;" class="navbar-text" href="index.php">
                <p style="font-size: 25px; color: white;">SI Perpustakaan</p>
                
            </a>
        
            
                <div class="user-settings-wrapper">
                <ul class="nav navbar-nav navbar-left"><img src="http://localhost/rplkelompok5/image/images_101.jpg" class="img-rounded"></ul>
                <?php //if (isset($_SESSION['username'])): ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Anggota Perpustakaan</h5>

                                    </div>
                                </div>
                                
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="index.php" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>
                    </ul>
                
            
            <?php //endif; ?>
            </div>

            </div>
            
            <?php if ($head=="Form Pendaftaran"): ?>
                
            <?php elseif ($head!="Log In"): ?>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
