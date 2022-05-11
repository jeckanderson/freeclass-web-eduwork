<?php 
require 'koneksi.php';
$id = $_GET["id"];

$hapus = mysqli_query($conn, "DELETE FROM supplier WHERE id = $id");
 if(mysqli_affected_rows($conn) > 0 ) {
    echo "<script>
            alert('data supplier berhasil di hapus!');
            document.location.href = 'supplier.php';
         </script>";
 } else {
    echo "<script>
            alert('data supplier gagal di hapus!');
            document.location.href = 'supplier.php';
          </script>";
    echo "gagal di hapus";
    echo mysqli_error($conn);
 }

?>