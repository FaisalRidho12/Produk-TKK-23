<?php
$x = 5985;
var_dump($x); // Outputs: int(5985)
echo "<br>"; 

$x = -345; // negative number 
var_dump($x); // Outputs: int(-345)
echo "<br>"; 

$x = 0x8C; // hexadecimal number
var_dump($x); // Outputs: int(140)
echo "<br>";

$x = 047; // octal number
var_dump($x); // Outputs: int(39)

$x = 10.365;
var_dump($x); // Outputs: float(10.365)
echo "<br>"; 

$x = 2.4e3;
var_dump($x); // Outputs: float(2400)
echo "<br>"; 

$x = 8E-5;
var_dump($x); // Outputs: float(8.0E-5)

echo strlen("Hello world!"); // Outputs: 12 (length of "Hello world!")
echo strpos("Hello world!","world"); // Outputs: 6 (position of "world" in "Hello world!")
?>
