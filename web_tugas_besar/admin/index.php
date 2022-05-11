<?php 
session_start();
if(!isset($_SESSION["admin"])) {
    echo "<script>
            alert('harus login dulu');
            document.location.href = 'login.php';
          </script>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Binary Admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> Last access : <?php echo date("l, d-M-Y"); ?> &nbsp; <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                    <!-- class="active-menu" -->
                        <a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=produk_data"><i class="fa fa-desktop"></i>Data Produk</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-qrcode"></i>Produk Terbaru</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=logout"><i class="fa fa-desktop"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                    if(isset($_GET["halaman"])) {
                        if($_GET['halaman'] == "produk_data") {
                            include 'produk_data.php';
                        } elseif($_GET['halaman'] == "produk_tambah") {
                            include 'produk_tambah.php';
                        } elseif($_GET['halaman'] == "produk_ubah") {
                            include 'produk_ubah.php';
                        } elseif($_GET['halaman'] == "produk_hapus") { 
                            include 'produk_hapus.php';
                        } elseif($_GET['halaman'] == "logout") {
                            include 'logout.php';
                        }
                    } else {
                        include 'home.php';
                    }
                ?>
            </div>
        </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script> -->
   
</body>
</html>
