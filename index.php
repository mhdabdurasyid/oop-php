<?php

require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

$sheep = new Animal("Shaun the sheep");

echo $sheep->name . "<br>";
echo $sheep->get_legs() . "<br>";
var_dump($sheep->get_cold_blooded());

echo "<hr>";

$frog = new Frog("Buduk");
echo $frog->name . "<br>";
echo $frog->get_legs() . "<br>";
echo $frog->jump();

echo "<hr>";

$sungokong = new Ape("Sungokong si Kera Sakti");
echo $sungokong->name . "<br>";
echo $sungokong->get_legs() . "<br>";
echo $sungokong->yell();
