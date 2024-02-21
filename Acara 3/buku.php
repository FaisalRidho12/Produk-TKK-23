<?php
$judul_buku = "Harry Potter";

$daftar_buku = array("Harry Potter", "Lord of the Rings", "Game of Thrones");

if (in_array($judul_buku, $daftar_buku)) {
    echo "Buku $judul_buku tersedia dalam perpustakaan.";
} else {
    echo "Maaf, buku $judul_buku tidak tersedia dalam perpustakaan.";
}
?>