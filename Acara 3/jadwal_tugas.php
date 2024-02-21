<?php
$tenggat = strtotime("2024-02-10");
$tgl_saat_ini = strtotime("today");

if ($tenggat < $tgl_saat_ini) {
    echo "Tugas telah berakhir!";
} else {
    $sisa_hari = ceil(($tenggat - $tgl_saat_ini) / (60 * 60 * 24));
    echo "Tugas akan berakhir dalam $sisa_hari hari.";
}
?>