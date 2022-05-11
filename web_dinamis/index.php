<?php 
require 'koneksi.php';
$result = query("SELECT * FROM pelanggan ORDER BY id ASC");
// $result = query($conn, "SELECT * FROM pelanggan ORDER BY id ASC");
// $rows = []; // digunakan untuk menyimpan nilai yang akan di isi dari lemari
// while($row = mysqli_fetch_assoc($result)) { //ambil looping data dari lemari simpan ke dalam row
//     $rows[] = $row;

    if(isset($_POST["search"])) {
        $result = cari($_POST["keyword"]);
        // var_dump($result);
    }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Halaman Pelanggan</title>
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
        <div class="col-md-12 text-center mb-3">
            <h4>Halaman Pelanggan</h4>
        </div>
        <div class="col-md-7 mb-3">
            <a href="tambah.php" class="btn btn-primary">Tambah Data Pelanggan +</a>
        </div>
        <div class="col-md-5 mb-3">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" name="keyword" placeholder="masukan keyword pencarian.." class="form-control" autocomplete="off">
                    <button type="submit" name="search" class="btn btn-sm btn-primary">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no=1; foreach($result as $row) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                        <td><?= $row["telpon"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td class="text-center">
                            <a href="ubah.php?id=<?= $row["id"]; ?>" class="badge rounded-pill bg-primary text-decoration-none">Ubah</a>
                            <a href="hapus.php?id=<?=$row["id"]; ?>" onclick=" return confirm('yakin?')" class="badge rounded-pill bg-danger text-decoration-none">Hapus</a>
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