<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once '../../vendor/autoload.php';

$num = new \NocWorx\Stuff\Numbers();

echo "<pre>";

echo "1 = " . $num->getOne() . "\n";
echo "2 = " . $num->getTwo() . "\n";
echo "3 = " . $num->getThree() . "\n";
echo "4 = " . $num->getFour() . "\n";
echo "5 = " . $num->getFive() . "\n";

echo "</pre>";
