<?php

echo "<h2>Constantes</h2>";
// constants
define('ROOT', dirname(__FILE__));
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'test';

echo DB_HOST;
echo "<br>";
echo DB_USER;
echo "<br>";
echo ROOT;

echo "<h2>Tipos de Variables</h2>";

// variable types
$string = "Hello world!";
$int = 123;
$float = 1.23;
$bool = false;
$array = [1, 2, 3];
$object = new stdClass();
$null = null;
var_dump($array);

echo "<h2>Operadores</h2>";

$result = 1 + 1;
$exp = 5 ** 3;
$comp = 1 < 1; //false
$comp = 1 <= 1; //true
$equal = 1 == 1; //true
$space = 1 <=> 1; // 0
$space = 1 <=> 2; // -1
$space = 1 <=> 0; // 1
$tern = $int === $result ? "Son iguales" : "No son iguales";
echo $tern;

echo "<h2>Control flow PHP</h2>";

$age = 64;

// control flow
echo "<h3>if</h3>";
if ($age < 18) {
    echo "Eres menor de edad";
} elseif ($age >= 65) {
    echo "Estás en edad de jubilación";
} else {
    echo "Eres mayor de edad y estás en activo";
}

// switch

$weekday = 2;

echo "<h3>switch</h3>";
switch ($weekday) {
    case 1: 
        echo "Monday";
        break;
    case 2: 
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7: 
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
        break;
}

// match

echo phpinfo();
















