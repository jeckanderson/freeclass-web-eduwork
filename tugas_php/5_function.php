<?php 

function luas_segitiga($alas, $tinggi) {
    $luas = ($alas * $tinggi) / 2;
    echo "Perhitungan luas segitiga, Rumus ($alas * $tinggi) /2<br>
    Alas = $alas <br>
    Tinggi = $tinggi <br>
    Luas = $luas<br><br>";
}
luas_segitiga(6,4);

function luas_persegi_panjang($panjang, $lebar) {
    $luas = $panjang*$lebar;
    echo "Perhitungan persegi panjang, Rumus ($panjang * $lebar) <br>
    Panjang = $panjang <br>
    Lebar = $lebar<br>
    Hasil = $luas<br><br>";
}
luas_persegi_panjang(4,3);

function luas_persegi($sisi) {
    $luas = $sisi*$sisi;
    echo "Perhitungan luas persegi, Rumus ($sisi*$sisi)<br>
    Sisi = $sisi<br>
    Hasil = $luas<br><br>";
}
luas_persegi(4);

function luas_lingkaran($jari, $phi) {
    $luas = $phi*$jari*$jari;
    echo "Perhitungan Luas Lingkaran, Rumus (22/7) * (r) * (r)<br>
    Jari Jari = $jari<br>
    Phi = $phi<br>
    Hasil = $luas<br><br>";

}
luas_lingkaran(6,22/7);

function bela_ketupat($diagonal1, $diagonal2) {
    $luas = $diagonal1*$diagonal2*0.5;
    $keliling = $diagonal1+$diagonal2+2;
    echo "Perhitungan Belah ketupat, Rumus ($diagonal1*$diagonal2*0.5) ($diagonal1+$diagonal2+2)<br>
    luas = $luas<br>
    keliling = $keliling<br><br>";
}
bela_ketupat(5,3);


function volume_kubus($panjang) {
    $volume = $panjang*$panjang*$panjang;
    echo "Perhitungan Volume Kubus, Rumus ($panjang*$panjang*$panjang)<br>
    panjang sisi kubus = $panjang cm <br>
    volume Kubus = $volume cm3 <br><br>";
}
volume_kubus(10);

?>
