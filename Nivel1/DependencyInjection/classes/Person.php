<?php

class Person {

    public function __construct(
        private ?PaymentMethod $paymentMethod = null,
        private ?AccessTool $keys = null,
        private ?CommuteType $commute = null,
        private ?CommunicationDevice $phone = null
    ){}
    
    public function goOut() : string {
        if ($this->paymentMethod === null  || $this->keys === null || $this->commute === null || $this->phone === null) {
            return "Aren't you missing something?...";
        } 

        return "I have my " . $this->paymentMethod->getName() . ", my " 
        . $this->keys->getKeys() . ", my " . $this->commute->name 
        . " and my " . $this->phone->getModel() . ". I'm ready to go!";
        
    }

}

?>