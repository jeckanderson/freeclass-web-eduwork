<?php 
require 'koneksi.php';
// $conn = mysqli_connect("localhost", "root", "", "perpus");
// Tangkap id dari url
$id = $_GET["id"];
$delete = mysqli_query($conn, "DELETE FROM pelanggan WHERE id=$id ");
if( mysqli_affected_rows($conn) > 0 ) {
    echo "<script>
                alert('data berhasil di hapus!');
                document.location.href = 'index.php';
         </script>";
} else {
    // echo "<script>
    //             alert('data gagal di hapus!');
    //             document.location.href = 'index.php';
    //      </script>";

    echo "gagal";
    echo mysqli_error($conn);
}

?>