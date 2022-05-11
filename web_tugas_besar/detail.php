<?php 
session_start();
require 'admin/function.php';
$id_produk = $_GET["id_produk"];
$data = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
// echo"<pre>";
// echo print_r($data);
// echo"</pre>";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Web Katalog</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=produk">Features</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">JavaScript</a></li>
                <li><a class="dropdown-item" href="#">PHP</a></li>
                <!-- <li><hr class="dropdown-divider"></li> -->
                <li><a class="dropdown-item" href="#">Java</a></li>
                <li><a class="dropdown-item" href="#">Phyton</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Comic</a>
            </li>
        </ul>
        <form class="d-flex" action="search.php" method="GET">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit" name="search">Search</button>
        </form>
        </div>
    </div>
    </nav>
    
    <section class="content pt-5">
        <div class="container">
            <div class="row" style="padding: 40px 0px;">
                <div class="col-md-6">
                    <div class="card p-0 m-0">
                        <img src="img/<?= $data["foto_produk"]; ?>" alt="" style="height: 30rem;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title"><?= $data["nama_produk"]; ?></h4>
                            <!-- <h6 class="card-subtitle mb-2 text-muted"> -->
                                <span class="fa fa-star checked small text-warning"></span>
                                <span class="fa fa-star checked small text-warning"></span>
                                <span class="fa fa-star checked small text-warning"></span>
                                <span class="fa fa-star small text-text-warning"></span>
                                <span class="fa fa-star small text-secondary"></span>
                            <!-- </h6> -->
                            <hr class="my-2">
                            <p class="card-text"><?= $data["deskripsi_produk"]; ?></p>
                            <hr class="my-2">
                            <span>Qty: <?= $data["stok"]; ?></span><br>
                            <span>Kategori: <?= $data["kategori"]; ?></span>
                            <hr class="my-2">
                            <div><span>Rp. <strong><?= number_format($data["harga_produk"]); ?></strong></span></div>
                            <a href="#" class="mt-2 btn btn-sm btn-secondary form-control">Add to chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span class="footer-title">INFORMATION</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="footer-title">CUSTOMER</sp>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="footer-title">MORE INFO</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="footer-title">HELP & SUPPORT</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">Copyright &copy;<strong>catalogshop </strong>All Right Reserved</div>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- owlcarousel -->
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
  </body>
</html>



<!-- <div class="card-body">
    <small class="badge rounded-pill bg-success mb-3">Rp. </small><br>
    <a href="" class="btn btn-sm btn-secondary mt-2">Add to chart</a>
</div> -->