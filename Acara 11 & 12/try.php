<?php
interface Bird{
    public function makesound();
    public function terbang();
}

class Perkutut implements Bird{
    public function makesound(){
        echo "Kur Kur\n";
    }
    public function terbang(){
        echo "uhuyyy";
    }
}

$burung = new Perkutut();
$burung->makesound();
$burung->terbang();
?>

<?php
interface animal{
    public function makesound();
}
class cat implements animal{
    public function makesound(){
        echo "meow \n";
    }
}
class dog implements animal{
    public function makesound(){
        echo "guk guk \n";
    }
}
class mouse implements animal{
    public function makesound(){
        echo "cit cit \n";
    }
}
$cat = new cat;
$dog = new dog;
$mouse = new mouse;
$animals = array ($cat, $dog, $mouse);

foreach ($animals as $animal) {
    $animal->makesound();
}
?>

<?php
interface logger{
    public function log($massage);
}
class filelogger implements logger{
    private $handle;
    private $logfile;

    public function __construct($filename, $mode = "a"){
        $this->logfile = $filename;
        $this->handle = fopen($filename, $mode)
            or die('Could not open the log file');
    }
    public function log($massage){
        $massage = date ('F j, Y, g:i a'). ':' . $massage . "\n";
        fwrite ($this->handle, $massage);
    }
    public function __destruct(){
        if ($this->handle){
            fclose($this->handle);
        }
    }
}
class databaselogger implements logger{
    public function log($massage){
        echo sprintf("Log %s to the database \n", $massage);
    }
}

$logger = new filelogger('./log.txt', 'w');
$logger->log('PHP interface is awesome');

$loggers=[
    new filelogger('./loh.txt'),
    new databaselogger()
];
foreach ($loggers as $logger){
    $logger->log('log massage');
}
?>