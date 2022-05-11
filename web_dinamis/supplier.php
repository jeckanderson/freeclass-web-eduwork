<?php 
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM supplier ORDER BY nama ASC");
$rows = []; // digunakan untuk menyimpan nilai yang akan di isi dari kotak
while($row = mysqli_fetch_assoc($result)) { //ambil looping data dari kotak simpan ke dalam row
$rows[] = $row;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Halaman Supplier</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Department Stores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Pelanggan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="penjualan.php">Penjualan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="supplier.php">Supplier</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h4>Halaman Supplier</h4>
        </div>
        <!-- <div class="col-md-7 mb-3">
            <a href="tambah.php" class="btn btn-sm btn-primary">Tambah Data Supplier +</a>
        </div>
        <div class="col-md-5 mb-3">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" id="search-button" name="username" id="username" class="form-control" autocomplete="off">
                    <button type="submit" id="search-button" class="btn btn-sm btn-primary"><i class="bi bi-search"></i>Search</button>
                </div>
            </form>
        </div> -->
        <div class="col-md-12 pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telpon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no=1; foreach($rows as $row) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["telpon"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td class="text-center">
                            <a href="supplier_ubah.php?id=<?= $row["id"]; ?>" class="badge rounded-pill bg-primary text-decoration-none">Ubah</a>
                            <a href="supplier_hapus.php?id=<?=$row["id"]; ?>" onclick=" return confirm('yakin?')" class="badge rounded-pill bg-danger text-decoration-none">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>