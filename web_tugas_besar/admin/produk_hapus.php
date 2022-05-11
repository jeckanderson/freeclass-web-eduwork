<?php 
require 'function.php';

$id_produk = $_GET["id_produk"];
// var_dump($id_produk);
mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id_produk");

if(mysqli_affected_rows($conn) > 0 ) {
    echo"<script>
            alert('data produk berhasil di hapus!');
            document.location.href = 'index.php?halaman=produk_data';
        </script>";
    // echo "<script>
    //         alert('data produk gagal di hapus!');
    //         document.location.href = 'halaman>produk_data';
    //      </script>";
    echo "data gagal di hapus";
    echo mysqli_error($conn);
}

?>