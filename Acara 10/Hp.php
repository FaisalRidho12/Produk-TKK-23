<?php
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }
    public function infoperangkat() {
        echo "Merk: $this->merk <br>Camera: $this->camera MP<br> Memory: $this->memory GB";
    }
}
class Handphone extends Tablet {
    public $handphone_baru;
    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }
    public function beli_handphone() {
        echo "Anda telah membeli handphone baru $this->handphone_baru";
    }
}
$tablet = new Tablet("Vivo", 12, 64);
echo "<h3>Informasi Tablet: </h3>";
$tablet->infoperangkat();
echo "<br>";

$handphone = new Handphone("Apple",16, 256, "iPhone 12 Pro Max");
echo "<h3>Informasi Handphone: </h3>";
$handphone->infoperangkat();
echo "<br>";
$handphone->beli_handphone();
?>