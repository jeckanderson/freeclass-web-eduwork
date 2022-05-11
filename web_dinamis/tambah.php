<?php 
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM pelanggan");
// $rows = [];
// while ($row = mysqli_fetch_assoc($result)) {
//     $rows[] = $row;
// }
// cek apakah tombol submit sudah di tekan atau belum 
if(isset($_POST["submit"]) ) {
    // $id = htmlspecialchars($_POST["id"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $telpon = htmlspecialchars($_POST["telpon"]);
    $alamat = htmlspecialchars($_POST["alamat"]); // ambil semua data di dalam form

    // Masukan ke dalam database
    mysqli_query($conn, "INSERT INTO pelanggan VALUES('', '$nama', '$jenis_kelamin', '$telpon', '$alamat');");

    if( mysqli_affected_rows($conn) > 0 ) {
        echo "<script>
                alert('data berhasil di tambahkan!');
                document.location.href='index.php';
             </script>";
    } else {
        // echo "<script>
        //         alert('data gagal di tambahkan!');
        //         document.location.href='index.php';
        //      </script>";
        echo "gagal";
        echo mysqli_error($conn);
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
    <title>Form Tambah Data</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Department Stores</a>
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
<div class="container p-5">
    <div class="row pb-3">
        <div class="col-md-12 text-center">
            <h3>Form Tambah Data Pelanggan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <table class="table-bordered" width="100%" cellpadding="10">
                    <!-- <input type="hidden" name="id"> -->
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="jenis_kelamin" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                            </select>
                            <!-- <input type="text" name="jenis_kelamin" class="form-control"> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Telpon</td>
                        <td><input type="text" name="telpon" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="form-control btn-primary" id="btn_submit" name="submit">Simpan Data</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>