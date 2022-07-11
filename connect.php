<?php
require_once __DIR__."/vendor/autoload.php";
require_once "car_rent.php";

use MongoDB\Client;

$db = new \MongoDB\Client("mongodb://127.0.0.1/");
$car = $db->car_rent->car;
$rent = $db->car_rent->rent;
?>