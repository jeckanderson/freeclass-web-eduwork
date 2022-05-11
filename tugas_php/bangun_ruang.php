<?php 
// Menghitung Volume Kubus
$panjang = 10;
$volume = $panjang*$panjang*$panjang;
echo "Perhitungan Volume Kubus, Rumus ($panjang*$panjang*$panjang)<br>
panjang sisi kubus = $panjang cm <br>
volume Kubus = $volume cm3 <br><br>";

// Menghitung Volume Balok
$panjang = 6;
$lebar = 7;
$tinggi = 9;
$volume = $panjang*$lebar*$tinggi;
echo"Perhitungan Volume Balok, Rumu($panjang*$lebar*$tinggi)<br>
Diketahui:<br>
panjang diagonal = $panjang<br>
lebar balok = $lebar<br>
tinggi balok = $tinggi<br>
maka volume Balok = $volume<br><br>";

// Limas
$panjang = 1/3;
$luasAlas = 10;
$tinggi = 15;
$volume = $panjang*$lebar*$tinggi;
echo"Perhitungan Volumen Limas, Rumus(V = 1/3 x Luas Alas x Tinggi)<br>
Luas Alas = $luasAlas cm<br>
Tinggi = $tinggi cm<br>
V = 1/3 x $luasAlas x $tinggi<br>
Hasil Volume = $volume";

?>