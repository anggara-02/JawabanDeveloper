<?php

function pembagian($a, $b){
    if($a < $b)
        // Jika A lebih kecil dari B Hasilnya = 0
        return 0;
    else
        return 1+pembagian($a-$b, $b);
}

$a = 8;
$b = 4;

echo pembagian($a, $b);