<?php 
require 'koneksi.php';

$id = $_GET["id"];
$produk = mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

if(mysqli_affected_rows($conn) > 0) {
    echo "<script> 
            alert('data produk berhasil di hapus!');
            document.location.href='produk.php';
         </script>";
} else {
    // echo "<script>
    //         alert('data produk gagal di hapus!');
    //         document.location.href='produk.php';
    //      </script>";
    // echo "gagal";
    echo mysqli_error($conn);
}

?>