<?php 
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM penjualan JOIN pelanggan ON penjualan.pelanggan_id = pelanggan.id");
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// cek apakah tombol submit sudah di tekan atau belum 
if(isset($_POST["submit"]) ) {
    // $id = htmlspecialchars($_POST["id"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $keterangan = htmlspecialchars($_POST["keterangan"]);
    $pelanggan_id = htmlspecialchars($_POST["pelanggan_id"]);
    $total = htmlspecialchars($_POST["total"]); // ambil semua data di dalam form

    // Masukan ke dalam database
    mysqli_query($conn, "INSERT INTO penjualan VALUES('', '$tanggal', '$keterangan', '$pelanggan_id', '$total');");

    if( mysqli_affected_rows($conn) > 0 ) {
        echo "<script>
                alert('data penjualan berhasil di tambahkan!');
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
    <title>Form Tambah Data Penjualan</title>
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
            <h3>Form Tambah Data Penjualan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <table class="table-bordered" width="100%" cellpadding="10">
                    <!-- <input type="hidden" name="id"> -->
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input type="text" name="keterangan" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Pelanggan Id</td>
                            <td><input type="text" name="pelanggan_id" class="form-control" readonly placeholder="3"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><input type="text" name="total" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="form-control btn-primary" name="submit">Simpan Data</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript">
    // document.getElementById('btn_submit').disabled = true;
    $('#btn_submit').prop('disabled', true);

    $nama = '';
    $jenis_kelamin = '';
    $telpon = '';
    $alamat = '';
    $('input[name=nama]').on('input', function(){
        nama = $(this).val();
        enableButton();
    });
    $('selected[name=jenis_kelamin]').on('selected', function(){
        jenis_kelamin = $(this).val();
        enableButton();
    });
    $('input[name=telpon]').on('input', function(){
        telpon = $(this).val();
        enableButton();
    });
    $('input[name=alamat]').on('input', function(){
        alamat = $(this).val();
        enableButton();
    });
    function enableButton() {
        if(nama != '' && jenis_kelamin != '' && telpon != '' && alamat != '') {
            $('#btn_submit').prop('disabled', false);
        } else {
            $('#btn_submit').prop('disabled', true);
        }
    }
</script> -->
</body>
</html>