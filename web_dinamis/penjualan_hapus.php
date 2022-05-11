<?php 
require 'koneksi.php';
$id = $_GET["id"];
$result = mysqli_query($conn, "DELETE FROM penjualan WHERE id = $id");
if(mysqli_affected_rows($conn) > 0) {
    echo"<script>
            alert('data penjualan berhasil di hapus!');
            document.location.href='penjualan.php';
        </script>";
} else {
    // echo"<script>
    //         alert('data pelanggan gagal di hapus');
    //         documen.location.href='penjualan.php';
    //     </script>";
    echo "gagal";
    echo mysqli_error($conn);
}


?>