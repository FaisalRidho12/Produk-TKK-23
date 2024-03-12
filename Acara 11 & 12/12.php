<?php //Tugas BKMP 12 no: 1-2
abstract class Person {
    abstract public function greet();
}

class English extends Person {
    public function greet() {
        echo "Hello! \n";
    }
}

class German extends Person {
    public function greet() {
        echo "Hallo! \n";
    }
}

class French extends Person {
    public function greet() {
        echo "Bonjour!\n";
    }
}

$english = new English();
$german = new German();
$french = new French();

// Test polymorphism
$english->greet();  // Outputs: Hello!
$german->greet();   // Outputs: Hallo!
$french->greet();   // Outputs: Bonjour!
?>

<?php //Tugas BKMP 12 no:3
abstract class transportasi{
    abstract public function mesin_nyala();
}

interface Mobil {
    public function buka_pintu();
}

class Pesawat extends transportasi{
    public function mesin_nyala() {
        echo "Mesin Pesawat sudah menyala abangkuh.\n";
    }
}

class Sepeda_Motor extends transportasi{
    public function mesin_nyala() {
        echo "Mesin Sepeda Motor mulai menyala.\n";
    }
}

class BMW implements Mobil {
    public function buka_pintu() {
        echo "Pintu mobil BMW terbuka.\n";
    }
}

$pesawat = new Pesawat();
$pesawat->mesin_nyala();

$Sepeda_Motor = new Sepeda_Motor();
$Sepeda_Motor->mesin_nyala();

$BMW = new BMW();
$BMW->buka_pintu();
?>