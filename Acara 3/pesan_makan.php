<?php
$pesanan = "Pizza";
$harga = 0;

if ($pesanan == "Pizza") {
    $harga = 10;
} elseif ($pesanan == "Burger") {
    $harga = 8;
} elseif ($pesanan == "Salad") {
    $harga = 6;
}

if ($harga > 0) {
    echo "Anda memesan $pesanan dengan harga $$harga.";
} else {
    echo "Maaf, menu $pesanan tidak tersedia.";
}
?>