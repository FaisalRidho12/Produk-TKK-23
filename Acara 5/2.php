<?php
$kalender_sekarang = getdate();
$tanggal = $kalender_sekarang['mday'];
$bulan = $kalender_sekarang['mon'];
$tahun = $kalender_sekarang['year'];
$output = "$tanggal-$bulan-$tahun";
echo "Tanggal, bulan, dan tahun sekarang adalah : $output";
?>