<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once '../../vendor/autoload.php';

$num = new \NocWorx\Stuff\Numbers();

echo $num->getOne();
echo $num->getTwo();
echo $num->getThree();
echo $num->getFour();
echo $num->getFive();
echo $num->getSix();
echo $num->getSeven();
echo $num->getEight();
echo $num->getNine();
echo $num->getTen();
