<?php
require_once 'Tigger.php';

$tigger = Tigger::getInstance();

for ($i = 0; $i < 5; $i++){
   $tigger->roar();
}

echo $tigger->getCounter();

