<?php 
require 'admin/function.php';
$keyword = $_GET["keyword"];
$data = query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' OR kategori LIKE '%$keyword%'");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Buku</a>
            </li>
        </ul>
        <form class="d-flex" action="search.php" method="GET">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit" name="search">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <!-- Container -->
    <section class="content">
        <div class="container" style="padding-top: 8%; padding-bottom: 20%;">
            <?php if(empty($data)) : ?>
                <div class="alert alert-primary" role="alert">Produk <strong><?= $keyword ?></strong> tidak di temukan</div>
                <!-- <script>document.location.href='index.php';</script> -->
            <?php endif; ?>
            <!-- <div class="row text-center mt-3">
                <div class="col-md-12">
                    <h3>Produk</h3>
                </div>
            </div> -->
            <div class="row">
                <?php foreach($data as $dat) : ?>
                <div class="col-md-3">
                    <div class="card my-2">
                        <div class="thumbnail">
                            <img src="img/<?= $dat["foto_produk"]; ?>" alt="" class="img-responsive" width="100%" height="190px">
                            <div class="card-body">
                                <h5 class="card-title mb-1"><?= $dat["nama_produk"]; ?></h5>
                                <p class="card-text m-0 p-0"><?= $dat["deskripsi_produk"]; ?></p>
                                <!-- <small class="badge rounded-pill bg-success mb-3">Rp. </small><br> -->
                                <div><span class="text-danger">Rp. <?= number_format($dat["harga_produk"]); ?></span></div>
                                <a href="detail.php" class="btn btn-sm btn-secondary mt-2">Detail</a>
                                <a href="" class="btn btn-sm btn-secondary mt-2">Add to chart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
  </body>
</html>
