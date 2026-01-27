<?php
require 'PaymentMethod.php';

class Wallet implements PaymentMethod {

    public function __construct(private string $name){}
    public function getName() : string {return $this->name;}

}
?>