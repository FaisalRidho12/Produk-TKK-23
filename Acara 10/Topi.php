<?php
class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function Ukuran($ukuran) {
        $this->ukuran = $ukuran;
    }
    public function Warna($warna) {
        $this->warna = $warna;
    }
    public function Nama($nama) {
        $this->nama = $nama;
    }
}
class Topi extends ItemProduk {
    private $model;

    public function setModel($model) {
        $this->model = $model;
    }
    public function getInfo() {
        return "Topi$this->nama dengan model $this->model, ukuran $this->ukuran, dan warna $this->warna.";
    }
}
class Celana extends ItemProduk {
    private $tipe;
    private $model;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function getInfo() {
        return "Celana $this->nama tipe $this->tipe dengan model $this->model, ukuran $this->ukuran, dan warna $this->warna.";
    }
}
class Baju extends ItemProduk {
    private $tipe;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }
    public function getInfo() {
        return "Baju $this->nama tipe $this->tipe, ukuran $this->ukuran, dan warna $this->warna.";
    }
}
$topi = new Topi();
$topi->setModel("Fedora");
$topi->Ukuran("M");
$topi->Warna("Coklat");
echo $topi->getInfo();
echo "<br>";

$celana = new Celana();
$celana->Nama("Jeans");
$celana->setTipe("Slim Fit");
$celana->setModel("Straight");
$celana->Ukuran("32");
$celana->Warna("Putih");
echo $celana->getInfo();
echo "<br>";

$baju = new Baju();
$baju->Nama("Kemeja");
$baju->setTipe("Kaos");
$baju->Ukuran("L");
$baju->Warna("Kuning");
echo $baju->getInfo();
echo "<br>";
?>