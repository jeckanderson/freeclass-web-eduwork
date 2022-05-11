<?php 
require 'koneksi.php';
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM supplier WHERE id = $id");
$rows = []; // digunakan untuk menyimpan nilai yang akan di isi dari kotak
while($row = mysqli_fetch_assoc($result)) { //ambil looping data dari kotak simpan ke dalam row
$rows[] = $row;

if(isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $telpon = $_POST["telpon"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE supplier SET nama = '$nama', telpon = '$telpon', alamat = '$alamat' WHERE id = $id";
    mysqli_query($conn, $query);

   if(mysqli_affected_rows($conn) > 0 ) {
       echo "<script>
                alert('data supplier berhasil di upate!');
                document.location.href='supplier.php';
            </script>";
   } else {
        // echo "<script>
        //         alert('data supplier gagal di update');
        //         document.location.href='supplier.php';
        //     </script>";
        echo "gagal di update";
        echo mysqli_error($conn);
   }
}

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
    <title>Halaman Ubah Supplier</title>
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
            <h4>Halaman Ubah Supplier</h4>
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
        <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <table class="table-bordered" width="100%" cellpadding="10">
                    <?php foreach($rows as $row) : ?>
                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" class="form-control" value="<?= $row["nama"]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Telpon</td>
                        <td><input type="text" name="telpon" class="form-control" value="<?= $row["telpon"]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" class="form-control" value="<?= $row["alamat"]; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="form-control btn-primary" name="submit">Simpan Data</button></td>
                    </tr>
                <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
    </div>
</div>
    
</body>
</html>