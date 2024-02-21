<?php
$nilai = 75;

if ($nilai > 70) {
    echo "Lulus";
} elseif ($nilai >= 60 && $nilai <= 70) {
    echo "Perbaikan";
} else {
    echo "Tidak Lulus";
}
?>