<?php 
require 'function.php';

$id_produk = $_GET["id_produk"];
// var_dump($id_produk);
$ubah_produk = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
// var_dump($ubah_produk);

if(isset($_POST['submit']) ) {
    $id_produk = $_POST["id_produk"];
    $nama_produk =  $_POST["nama_produk"];
    $harga_produk =  $_POST["harga_produk"];
    $deskripsi_produk = $_POST["deskripsi_produk"];
    $kategori = $_POST["kategori"];
    $stok = $_POST["stok"];

    $foto_produk = $_FILES["foto_produk"]["name"];
    $lokasi_foto = $_FILES["foto_produk"]["tmp_name"];
    if(!empty($lokasi_foto)) {
        move_uploaded_file($lokasi_foto, "../img/$foto_produk");

        $query =  "UPDATE produk SET
                nama_produk = '$nama_produk',
                harga_produk = '$harga_produk',
                deskripsi_produk = '$deskripsi_produk',
                kategori = '$kategori',
                stok = '$stok',
                foto_produk = '$foto_produk'
                WHERE id_produk = $id_produk
                ";
    mysqli_query($conn, $query);

    } else {
            $query =  "UPDATE produk SET
            nama_produk = '$nama_produk',
            harga_produk = '$harga_produk',
            deskripsi_produk = '$deskripsi_produk',
            kategori = '$kategori',
            stok = '$stok'
            WHERE id_produk = $id_produk
            ";
        mysqli_query($conn, $query);

    }

    if(mysqli_affected_rows($conn) > 0 ) {
        echo "<script>
                alert('data produk berhasil di diubah!');
                document.location.href = 'index.php?halaman=produk_data';
             </script>";
        // echo "<div class='alert alert-info'>Data tersimpan</div>";
        // echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=ptoduk_data'>";
        
    } else {
        echo "<script>
                alert('data produk gagal di ubah!');
                document.location.href = 'index.php?halaman=produk_data';
             </script>";
        // echo "data produk gagal di ubah";
        echo mysqli_error($conn);
    }
}

?>
<h3 class="text-center">Halaman Ubah Produk</h3>
<div class="row">
    <div class="col-md-6">
    <form action="" method="post" enctype="multipart/form-data">
        <div><input type="hidden" name="id_produk" value="<?= $ubah_produk["id_produk"]; ?>"></div>
        <div class="form-group">
            <label for="namaproduk">Nama Produk</label>
            <input type="text" name="nama_produk" id="namaproduk" class="form-control" value="<?= $ubah_produk["nama_produk"]; ?>">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi_produk" id="deskripsi" class="form-control" value="<?= $ubah_produk["deskripsi_produk"]; ?>">
        </div>
        <div class="form-group">
            <label for="harga_produk">Harga</label>
            <input type="text" name="harga_produk" id="harga_produk" class="form-control" value="<?= $ubah_produk["harga_produk"]; ?>">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $ubah_produk["kategori"]; ?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" class="form-control" value="<?= $ubah_produk["stok"]; ?>">
        </div>
        <div class="form-group">
            <img src="../img/<?= $ubah_produk["foto_produk"]; ?>" width="70px">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto_produk" id="foto" class="form-control" value="<?= $ubah_produk["foto_produk"]; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
    </form>
    </div>
</div>