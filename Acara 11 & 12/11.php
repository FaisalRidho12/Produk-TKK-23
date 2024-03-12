<?php
interface HitungLuas{
    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    public function hitungLuasLingkaran();
}
//Class untuk hitung luas persegi
class Persegi implements HitungLuas{
    private $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function hitungLuasPersegi(){
        return $this->sisi * $this->sisi;
    }
    public function hitungLuasSegitiga(){
        return 0;
    }
    public function hitungLuasLingkaran(){
        return 0;
    }
}
//class untuk hitung luas segitiga
class Segitiga implements HitungLuas{
    private $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function hitungLuasPersegi(){
        return 0;
    }
    public function hitungLuasSegitiga(){
        return 0.5 * $this->sisi * $this->sisi;
    }
    public function hitungLuasLingkaran(){
        return 0;
    }
}
//class untuk hitung luas lingkaran
class Lingkaran implements HitungLuas{
    private $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function hitungLuasPersegi(){
        return 0;
    }
    public function hitungLuasSegitiga(){
        return 0;
    }
    public function hitungLuasLingkaran(){
        return M_PI * $this->sisi * $this->sisi;
    }
}
//Object dari masing-masing class
$persegi= new Persegi(6);
$segitiga= new Segitiga(4);
$lingkaran= new lingkaran(3);

$luas_persegi = $persegi->hitungLuasPersegi();
$luas_segitiga = $segitiga->hitungLuasSegitiga();
$luas_lingkaran = $lingkaran->hitungLuasLingkaran();

echo "Luas Persegi: $luas_persegi \n";
echo "Luas Segitiga: $luas_segitiga \n";
echo "Luas Lingkaran: $luas_lingkaran \n";
?>