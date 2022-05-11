<?php 
require 'function.php';
$rows = query("SELECT * FROM produk ORDER BY id_produk DESC");
?>
<h3 class="text-center">Halaman Produk</h3>
<div class="row">
    <div class="col-md-6">
        <a href="index.php?halaman=produk_tambah" class="btn btn-primary">Tambah Data Produk</a>
    </div>
    <!-- <div class="col-md-6">
        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control">
                <button class="btn btn-primary" name="search">Cari</button>
            </div>
        </form>
    </div> -->
</div>
<table class="table table-bordered" style="margin-top: 20px;">
    <thead>
        <tr class="text-center">
            <td>No</td>
            <td>Foto</td>
            <td>Nama Produk</td>
            <td>Deskripsi</td>
            <td>Harga</td>
            <td>Kategori</td>
            <td>Stok</td>
            <td>Action</td>
        </tr>
    </thead>
    <?php $no = 1; ?>
    <?php foreach($rows as $row): ?>
    <tbody>
        <tr>
            <td><?= $no++; ?></td>
            <td>
                <img src="../img/<?= $row["foto_produk"];  ?>" width="70px" height="50px">
            </td>
            <td><?= $row["nama_produk"]; ?></td>
            <td><?= $row["deskripsi_produk"]; ?></td>
            <td><?= $row["harga_produk"]; ?></td>
            <td><?= $row["kategori"]; ?></td>
            <td><?= $row["stok"]; ?></td>
            <td class="text-center">
                <a href="index.php?halaman=produk_ubah&id_produk=<?= $row["id_produk"]; ?>" class="btn btn-sm btn-primary">Ubah</a>
                <a href="index.php?halaman=produk_hapus&id_produk=<?= $row["id_produk"]; ?>" onclick="return confirm('apakah anda yakin menghapus data ini?')" class="btn btn-sm btn-warning">Hapus</a>
                <!-- badge rounded-pill bg-danger -->
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
