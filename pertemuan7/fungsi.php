<?php

// fungsi tanpa parameter
function aturan() {
    echo "Aturan selama bimbingan IT <br>";
    echo "1. Jangan terlambat <br>";
    echo "2. Wajib bawa laptop <br>";
    echo "3. Mandi dek <br>";
    // ada nilai/hasil yang kita tampilkan atau kembalikan. 
    // baru pakai return
}

aturan();
echo "<br>";

// fungsi pakai parameter
function balok($panjang, $lebar, $tinggi) {
    $hasil = $panjang * $lebar * $tinggi;
    return $hasil;
}

echo "Hasil balok : " . balok(5,2,4) . "<br>";
echo "Hasil balok : " . balok(51,22,422) . "<br>";


?>