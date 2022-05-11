<?php 
// $nama = "pelita";
// $jk = "perempuan";
// $thn_lahir = 1998;
// $umur = date('Y') - $thn_lahir;

// if($jk == "perempuan") {
//     echo"selamat pagi nyonya $nama<br>";
//     echo"umur anda adalah $umur";
// } else {
//     echo"selamat pagi tuan $nama<br>";
//     echo "umur anda adalan $umur<br><br>";
// }


// $menu = 3;
// $bilangan1 = 6;
// $bilangan2 = 8;

// if($menu == 1) {
//     echo $bilangan1 + $bilangan2;
// } else if( $menu == 2 ){
//     echo $bilangan1 * $bilangan2;
// } else if( $menu== 3 ) {
//     echo $bilangan1 / $bilangan2;
// } else if ( $menu == 4) {
//     echo $bilangan1 - $bilangan2;
// } else {
//     echo "angka yang ada masukan salah";
// }


// $angka = 9;
// switch($angka) {
//     case 1:
//         echo "angka yang anda masukan adalah 1";
//         break;
//     case 2:
//         echo "angka yang anda masukan adalah 2";
//         break;
//     case 3:
//         echo "angka yang anda masukan adalah 3";
//         break;
//     case 4:
//         echo "angka yang anda masukan adalah 4";
//         break;
//     default :
//         echo "angka yang anda masukan salah";
//         break;
// }

// FOREACH
// $array = [
//         "Nama ke 1", "Nama ke 2", "Nama ke 3", "Nama ke 4", "Nama ke 5", "Nama ke 6", "Nama ke 7", "Nama ke 8", "Nama ke 9", "Nama ke 10"
// ];

// echo"
// <table>
// <tr>
//     <th>No</th>
//     <th>Nama</th>
//     <th>Kelas</th>
// </tr>
// <tr>
//     <td>1</td>
//     <td>Jeck Anderson</td>
//     <td>Jogja</td>
// </tr>
// </table>
// ";

// foreach ($array as $ar) {}
// for($i = 1; $i <= 10; $i++) {
//     $j = $i * 1;
//     echo "1 x $i = $j";
//     echo "<br>";
// }

// for($i = 1; $i < 10; $i++) {
//     for($j = 0; $j < $i; $j++) {
//         echo "$j";
//     }
//     echo "<br>";
// }


// for($i = 1; $i <= 10; $i++) {
//     if($i % 2 == 1) {
//         echo "$i adalah bilangan genap<br>";
//     } else {
//         echo "$i adalah bilangan ganjil<br>";
//     }
// }


// Array Dengan Looping For

// $data = array("semangka","jeruk","appel","anggur");
// echo $data[1];
// count untuk menghitung isi dari array
// for($i = 0; $i < count($data); $i++) {
//     echo "Looping ke $i adalah " .$data[$i]."<br>";
// }

// $data["Semangka"] = "Rasanya Segar";
// $data["Jeruk"] = "Rasanya Manis Asem";
// $data["Anggur"] = "Rasanya Enak";
// $data["Apple"] = "Rasanya Manis";

// echo $data["Apple"];



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tugas PHP Array</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-info">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Daftar Nilai</span>
        </div>
    </nav>

    <div class="container">
        <div class="row p-5">
            <div class="col-md">
                <?php 
                    $data = file_get_contents("data.json");
                    $ambil_data = json_decode($data, true);
                    // print_r($ambil_data);
                ?>
                <table class="table table-bordered">
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

                            <?php for($i = 1; $i <= count($key); $i++) : ?>
                            <?php if($i % 2 == 0) : ?>
                        <tr style="background-color:  silver;">
                            <?php else: ?>
                                <tr>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <td>-</td>
                            <td><?php echo $key["nama"]; ?></td>
                            <td><?php echo $key["tanggal_lahir"]; ?></td>
                            <td>Umur</td>
                            <td><?php echo $key["alamat"]; ?></td>
                            <td><?php echo $key["kelas"]; ?></td>
                            <td><?php echo $key["nilai"]; ?></td>
                            <td>Hasil</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <a href="#" onclick="rumus_segitiga()">Klick Aku</a> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function rumus_segitiga() {
            console.log('Rumus luas segitiga adalah r*r*r');
            // return $hasil;
        }
    </script>

  </body>
</html>
