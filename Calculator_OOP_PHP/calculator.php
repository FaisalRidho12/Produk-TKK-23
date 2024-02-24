<?php
class Kalkulator {
    private $bil1;
    private $bil2;

    public function __construct($bil1, $bil2) {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }
    public function tambah() {
        return $this->bil1 + $this->bil2;
    }
    public function kurang() {
        return $this->bil1 - $this->bil2;
    }
    public function kali() {
        return $this->bil1 * $this->bil2;
    }
    public function pangkat(){
        return $this->bil1 ** $this->bil2;
    }
    public function bagi() {
        if ($this->bil2 == 0) {
            return "Error! Tidak bisa melakukan pembagian....";
        } else {
            return $this->bil1 / $this->bil2;
        }
    }
}
$kalkulator = new Kalkulator(20, 2);
//angka tersebut sbg bilangan yg akan di operasikan
echo "Hasil Penjumlahan: " . $kalkulator->tambah() . "<br>";
echo "Haisl Pengurangan: " . $kalkulator->kurang() . "<br>";
echo "Hasil Perkalian: " . $kalkulator->kali() . "<br>";
echo "Hasil Pembagian: " . $kalkulator->bagi() . "<br>";
echo "Hasil Pangkat: " . $kalkulator->pangkat() . "<br>";
?>