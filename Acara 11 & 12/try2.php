<?php
interface tanah{
    public function hitungluas();
}
abstract class bibit{
    abstract public function ditanami();
}
class lingkaran extends bibit implements tanah{
    private $jariJari;
    private $pi = 3.14;

    public function ___construct($jariJari){
        $this->jariJari = $jariJari;
    }
    public function hitungluas(){
        return $this->jariJari * $this->jariJari * $this->pi;
    }
    public function ditanami(){
        return "ditanamai Kopi";
    }
}
class persegipanjang extends bibit implements tanah{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function hitungluas(){
        return $this->panjang * $this->lebar;
    }
    public function ditanami(){
        return "ditanami Padi";
    }
}
$tanahAgus = new lingkaran(3);
$tanahBagus = new persegipanjang(3,4);

echo "Tanah Agus seluas ". $tanahAgus->hitungluas() . "m2 \n";
echo $tanahAgus->ditanami() . "\n";
echo "Tanah Bagus seluas ". $tanahBagus->hitungluas() . "m2 \n";
echo $tanahAgus->ditanami() . "\n";
?>