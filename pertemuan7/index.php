<?php

// echo "Hello World ";

$a = 1;
$b = 4;

$a = $b;
$b = $a + 1;

echo $a . "<br>";
echo $b . "<br>";

// looping
// FOR  
for($i = 0; $i <= 10; $i++) 
{
    echo "ini angka : " . $i . "<br>";
}

// WHILE
$awal = 1;
while($awal < 5)
{
    echo "ini while Ke : " . $awal . "<br>";
    $awal++;
}

// DO WHILE
$awal2 = 1;
do {
    echo "ini do while ke : " . $awal2 . "<br>";
    $awal2++;
} while($awal2 <= 5);




?>