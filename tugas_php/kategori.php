<?php 

$nama = "Budy";
$tb = 140 / 100; 
$bb = 80;
$bmi = $bb / ($tb * $tb);

if($bmi > 23.1 && $bmi > 28.1) {
    echo"Hallo, $nama, nilai BMI Anda adalah: $bmi Anda termasuk Gemuk";
} else if ($bmi > 18.1) {
    echo"Hallo, $nama, nilai BMI Anda adalah: $bmi Anda termasuk Sedang";
} else if($bmi < 18.1 ) {
    echo"Hallo, $nama, nilai BMI Anda adalah: $bmi Anda termasuk Kurus";
} else {
    echo "yang anda masukan bukan angka";
}

?>