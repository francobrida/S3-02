<?php

class Person {

    public function __construct(
        private Wallet $wallet,
        private HouseKeys $keys,
        private CommuteTool $commute,
        private Smartphone $phone
    ){}
    
    public function goOut() : string {
        if ($this->wallet === null  || $this->keys === null || $this->commute === null || $this->phone === null) {
            return "Aren't you missing something?...";
        } // I just realized this validation may be useless since the constructor claims all dependencies to be provided. Anyway... 

        return "I have my " . $this->wallet->getName() . ", my " 
        . $this->keys->getKeys() . ", my " . $this->commute->getType()->name 
        . " and my " . $this->phone->getModel() . ". I'm ready to go!";
        
    }

}

?>