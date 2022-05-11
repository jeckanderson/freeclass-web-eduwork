<?php
// Luas Segitiga
$alas = 6;
$tinggi = 4;
$luas = ($alas * $tinggi) / 2;
echo "Perhitungan luas segitiga, Rumus ($alas * $tinggi) /2 <br>
alas = $alas <br>
tinggi = $tinggi <br>
luas = $luas<br><br>";

// Luas Persegi Panjang
$panjang = 4;
$lebar = 3;
$luas = $panjang * $lebar;
echo "Perhitungan Persegi panjang, Rumus ($panjang * $lebar)<br>
panjang = $panjang <br>
lebar = $lebar<br>
hasil = $luas<br><br>";

// Luas Persegi
$sisi = 5;
$luas = $sisi*$sisi;
echo "Perhitungan Persegi, Rumus ($sisi*$sisi)<br>
sisi = $sisi<br>
hasil = $luas<br><br>";

// Luas Lingkaran
$jari = 6;
$phi = 22/7;
$luas = $phi * $jari * $jari;
echo "Perhitungan Luas Lingkaran, Rumus (22/7) * (r) * (r)<br>
jari-jari = $jari<br>
hasil = $luas<br><br>";

// Belah Ketupat
$diagonal1 = 5;
$diagonal2 = 3;
$luas = $diagonal1*$diagonal2*0.5;
$keliling = $diagonal1+$diagonal2+2;
echo "Perhitungan Belah ketupat, Rumus ($diagonal1*$diagonal2*0.5) ($diagonal1+$diagonal2+2)<br>
luas = $luas<br>
keliling = $keliling";



?>