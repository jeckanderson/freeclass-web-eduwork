<?php 
$conn = mysqli_connect("localhost", "root", "", "perpuss");
$result = mysqli_query($conn, "SELECT * FROM pengarang");
if(!$result) {
    echo mysqli_errno($conn);
}
// $ambil = mysqli_fetch_assoc($result);
// var_dump($ambil);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Tugas Connection | Tampilkan Data</title>
</head>
<body>
    <div class="container">
    <h3>Tugas Connection Menampilkan Data dari Database</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengarang</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no= 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row["nama_pengarang"];?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["telp"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
    </div>
</body>
</html>