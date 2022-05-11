<?php 

$nilai = 60;

switch ($nilai) {
    case $nilai > 90 || $nilai >= 100:
            echo "A";
        break;
    case $nilai >=  80 || $nilai >= 90:
            echo "B";
        break;
    case $nilai >= 70 || $nilai  >= 80:
            echo "C";
        break;
    case $nilai < 70:
            echo "D";
        break;
    default:
        echo "Salah";
        break;
}

?>