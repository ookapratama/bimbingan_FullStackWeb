<?php

$arr = [4, 6, 2, 345, 2, 5, 23, 5, 4];
// $arr = array(4,6,2,345,2,5,23,5,4);

echo "ini cetak per index : " . $arr[0];
echo "<br>";

// FOR
for ($i = 0; $i < 9; $i++) {
    echo "ini index ke: " . $i . " yang nilai nya : " . $arr[$i];
    echo "<br>";
}

echo "<br>";
echo "<br>";
// WHILE
$awal = 0;
while ($awal < 9) {
    echo "ini while array yg nilai nya : " . $arr[$awal];
    echo "<br>";
    $awal++;
}

echo "<br>";
// DO WHILE
$awal2 = 0;
do {
    echo "ini do while array yg nilai nya : " . $arr[$awal2];
    echo "<br>";
    $awal2++;
} while ($awal2 < 9);
