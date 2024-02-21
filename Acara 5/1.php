<?php
function bilangan_terbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}
$bilangan1 = 100;
$bilangan2 = 150;
$bil_terbesar = bilangan_terbesar ($bilangan1, $bilangan2);
echo "Bilangan terbesar antara 100 dan 150 adalah: " . $bil_terbesar;
?>