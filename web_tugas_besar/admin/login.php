<?php
session_start();
require 'function.php';
if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    // var_dump($result);
    if(mysqli_num_rows($result) === 1 ) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION["admin"] = $data;
        echo "<script>
                alert('login sukses');
                document.location.href = 'index.php';
             </script>";
    } else {
        echo "<script>
                alert('login gagal');
                document.location.href = 'login.php';
             </script>";
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br/><br/>
                <h2>Admin : Login</h2>
                <h5>( <?= date("l, d-M-Y"); ?> )</h5>
                 <br/>
            </div>
        </div>
         <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Enter Details To Login</strong>  
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <br/>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" required class="form-control" name="username" placeholder="Your Username"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" required name="password" placeholder="Your Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox"/>Remember me
                                </label>
                                <span class="pull-right">
                                    <a href="#">Forget password ?</a> 
                                </span>
                            </div> -->
                                <button class="btn btn-primary" name="login">Login</button>
                            <!-- <hr/>
                            Not register ? <a href="registeration.html"> click here</a>  -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
   
</body>
</html>