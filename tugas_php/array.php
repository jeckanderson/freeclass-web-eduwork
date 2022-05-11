<?php 
    $data = file_get_contents("data.json");
    $ambil_data = json_decode($data, true);
    // print_r($ambil_data);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tugas PHP | Array</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Daftar Nilai</a>
        </div>
    </nav>
    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Umur</td>
                    <td>Alamat</td>
                    <td>Kelas</td>
                    <td>Nilai</td>
                    <td>Hasil</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ambil_data as $key) : ?>
                <tr>
                    <td><?php echo $key["id"] ?></td>
                    <td><?php echo $key["nama"]; ?></td>
                    <td><?php echo $key["tanggal_lahir"]; ?></td>
                    <td><?php
                        $tglLahir = $key["tanggal_lahir"];
                        $umur = new DateTime($tglLahir);
                        $sekarang = new DateTime();

                        $usia = $sekarang->diff($umur);
                        echo $usia->y."&nbsp"."Tahun";

                    ?></td>
                    <td><?php echo $key["alamat"]; ?></td>
                    <td><?php echo $key["kelas"]; ?></td>
                    <td><?php echo $key["nilai"]; ?></td>
                    <td><?php 
                         if($key["nilai"] >= 90 and $key["nilai"] <= 100){
                            echo "A";
                        } else if($key["nilai"] >= 80 and $key["nilai"] <= 85 ){
                            echo "B";
                        } else if($key["nilai"] >= 66 and $key["nilai"] <= 80  ){
                            echo "C";
                        } else{
                            echo "D";
                        }
                    ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
