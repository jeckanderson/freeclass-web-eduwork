<?php
// koneksi
$conn = mysqli_connect("localhost", "root", "", "toko");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function tambahproduk($data) {
//     global $conn;
//     $foto_produk = $_POST["foto_produk"];
//     $nama_produk =  $_POST["nama_produk"];
//     $deskripsi_produk = $_POST["deskripsi_produk"];
//     $harga_produk = $_POST["harga_produk"];
//     $kategori = $_POST["kategori"];
//     $stok = $_POST["stok"];

//     $query =  "INSERT INTO produk VALUES ('', '$foto_produk', '$nama_produk', '$deskripsi_produk', '$harga_produk', '$kategori', '$stok')";
//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

?>