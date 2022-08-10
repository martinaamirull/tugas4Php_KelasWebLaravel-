<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new Animal("shaun");

echo "Name :".$sheep->name."<br>"; // "shaun"
echo "legs :".$sheep->legs."<br>"; // 2
echo "cold_blooded :".$sheep->cold_blooded."<br>"; // false

echo"===========================================<br><br>";
$katak=new Frog("Katak BUduk");
echo "Name :".$katak->name."<br>"; 
echo "legs :".$katak->legs."<br>"; 
echo "cold_blooded :".$katak->cold_blooded."<br>"; // false
echo  $katak->jump()."<br><br>";

echo"===========================================<br><br>";
$sungokong=new Ape("Kera Sakti");
echo "Name :".$sungokong->name."<br>"; 
echo "legs :".$sungokong->legs."<br>"; 
echo "cold_blooded :".$sungokong->cold_blooded."<br>"; // false
echo $sungokong->yell();


?>