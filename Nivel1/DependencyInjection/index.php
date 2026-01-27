<?php
require_once 'CommuteType.php';
require_once 'classes/Wallet.php';
require_once 'classes/Smartphone.php';
require_once 'classes/HouseKeys.php';
require_once 'classes/Person.php';
require_once 'classes/CommunicationDevice.php';
require_once 'classes/PaymentMethod.php';

$wallet = new Wallet("Lucky Wallet");
$phone = new Smartphone("Iphone 13");
$keys = new HouseKeys("Main door key");

$randomGuy = new Person($wallet, $keys, CommuteType::TransportCard, $phone);
echo $randomGuy->goOut() . PHP_EOL;

$randomPerson2 = new Person(null, $keys, null, $phone);
echo $randomPerson2->goOut();


?>