<?php 
require 'function.php';
if(isset($_POST['submit']) ) {

    $nama_produk =  $_POST["nama_produk"];
    $harga_produk =  $_POST["harga_produk"];
    $deskripsi_produk = $_POST["deskripsi_produk"];
    $kategori = $_POST["kategori"];
    $stok = $_POST["stok"];
    $foto_produk = $_FILES["foto_produk"]["name"];
    $upload = $_FILES["foto_produk"]["tmp_name"];
    move_uploaded_file($upload, "../img/".$foto_produk);

    $query =  "INSERT INTO produk VALUES ('', '$nama_produk', '$harga_produk', '$deskripsi_produk', '$kategori', '$stok', '$foto_produk')";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0 ) {
        echo "<script>
                alert('data produk berhasil di tambahkan!');
                document.location.href = 'index.php?halaman=produk_data';
             </script>";
        // echo "<div class='alert alert-info'>Data tersimpan</div>";
        // echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk_data'>";
        
    } else {
        echo "<script>
                alert('data produk gagal di tambahkan!');
                document.location.href = 'index.php?halaman=produk_data.php';
             </script>";
        echo "data produk gagal di tambahkan";
        echo mysqli_errno($conn);
    }
}

?>
<h3 class="text-center">Halaman Tambah Produk</h3>
<div class="row">
    <div class="col-md-6">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="namaproduk">Nama Produk</label>
            <input type="text" name="nama_produk" id="namaproduk" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga_produk">Harga</label>
            <input type="text" name="harga_produk" id="harga_produk" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi_produk" id="deskripsi" class="form-control">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" class="form-control">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto_produk" id="foto" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
    </form>
    </div>
</div>