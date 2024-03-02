<?php
class MobilLengkap {
    public function diam() {
        echo "Sedang parkir";
    }
    public function jalan() {
        echo "Bejalan.";
    }
    public function rem() {
        echo "Mengerem.";
    }
    public function belok($Berbelok) {
        echo "Berbelok " . $Berbelok;
    }
}
class MobilBMW extends MobilLengkap {
}
class MobilBMWberaksi {
    public function nontonTv() {
        echo "Menonton TV di dalam mobil BMW.";
    }
    public function HidupkanMobil() {
        echo "Menyalakan mobil BMW.";
    }
    public function MatikanMobil() {
        echo "Mematikan mobil BMW.";
    }
    public function ubahGigi($gigi) {
        echo "Mengubah gigi mobil BMW ke posisi " . $gigi;
    }
}
$bmw = new MobilBMW();
echo "Mobil BMW: <br>";
$bmw->diam();
echo "<br>";
$bmw->jalan();
echo "<br>";
$bmw->rem();
echo "<br>";
$bmw->belok("ke kiri");
echo "<br>";

$bmw_beraksi = new MobilBMWberaksi();
echo "<br>Mobil BMW beraksi: <br>";
$bmw_beraksi->nontonTv();
echo "<br>";
$bmw_beraksi->HidupkanMobil();
echo "<br>";
$bmw_beraksi->MatikanMobil();
echo "<br>";
$bmw_beraksi->ubahGigi(4);
echo "<br>";
?>