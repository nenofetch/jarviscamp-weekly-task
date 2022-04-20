<?php
require 'Animal.php';
require 'Ape.php';
require 'Frog.php';

$sheep = new Animal("shaun");

echo "Name : $sheep->name<br>"; // "shaun"
echo "legs : $sheep->legs<br>"; // 4
echo "cold blooded : $sheep->cold_blooded<br>"; // "no"

echo "<br>";
$kodok = new Frog("buduk");
echo "Name : $kodok->name <br>"; // "buduk"
echo "legs : $kodok->legs <br>"; // 4
echo "cold blooded : $kodok->cold_blooded <br>"; // "no"
$kodok->jump(); // "Jump : hop hop"

echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name : $sungokong->name <br>"; // "kera sakti"
echo "legs : ". $sungokong->legs = 2 ."<br>"; // 2
echo "cold blooded : $sungokong->cold_blooded<br>"; // "no"
$sungokong->yell(); // "Auooo"
?>