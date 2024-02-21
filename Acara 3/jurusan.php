<?php
$minat = "Ilmu Komputer";
$bakat = "Pemrograman";

if ($minat == "Ilmu Komputer" && $bakat == "Pemrograman") {
    echo "Rekomendasi Jurusan: Teknik Informatika";
} elseif ($minat == "Ilmu Komputer" && $bakat == "Desain Grafis") {
    echo "Rekomendasi Jurusan: Desain Komunikasi Visual";
} elseif ($minat == "Ekonomi" && $bakat == "Analisis Data") {
    echo "Rekomendasi Jurusan: Manajemen Bisnis";
} else {
    echo "Maaf, tidak ada rekomendasi jurusan yang sesuai dengan minat dan bakat Anda.";
}
?>