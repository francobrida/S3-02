<?php
require_once 'CommuteType.php';
require_once 'classes/Wallet.php';
require_once 'classes/Smartphone.php';
require_once 'classes/HouseKeys.php';
require_once 'classes/CommuteTool.php';
require_once 'classes/Person.php';

$wallet = new Wallet("Lucky Wallet");
$phone = new Smartphone("Iphone 13");
$keys = new HouseKeys("Main door key");
$transport = new CommuteTool(CommuteType::TransportCard);

$randomGuy = new Person($wallet, $keys, $transport, $phone);
echo $randomGuy->goOut();

?>