<?php
require_once 'Tigger.php';

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

for ($i = 0; $i < 5; $i++){
   $tigger1->roar();
}

echo $tigger2->getCounter();

