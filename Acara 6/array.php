<?php
// Matriks A
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);
// Matriks B
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);
// Matriks hasil penjumlahan
$hasil = array();
// Proses penjumlahan matriks
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}
// Menampilkan matriks hasil penjumlahan
echo "Jumlah dari Matriks A + Matriks B adalah:" . "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasil[$i][$j] . " ";
    }
    echo "<br>";
}
?>
