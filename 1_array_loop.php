<?php

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'e0viz';

$lengthData = count($aplikasi);

$i = 1;
while ($i <= $lengthData) {
    echo $aplikasi[$i];
    echo "</br>";
    $i++;
}
