<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

$angka = 5;
$hasil = faktorial($angka);


echo "Faktorial dari $angka = $hasil";
?>
