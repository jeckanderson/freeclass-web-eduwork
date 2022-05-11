<?php 
 $conn = mysqli_connect("localhost", "root", "", "penjualann");

 function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query); // code ini adalah lemari
    $rows = []; // digunakan untuk menyimpan nilai yang akan di isi dari lemari
    while($row = mysqli_fetch_assoc($result)) { //ambil looping data dari lemari simpan ke dalam row
        $rows[] = $row;
    }
    return $rows;
 }

 function cari($keyword) {
    $query = "SELECT * FROM pelanggan WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR telpon LIKE '$keyword'";

    return query($query);
 }

?>