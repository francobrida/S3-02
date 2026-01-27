<?php
require_once 'Duck.php';

class TurkeyAdapter extends Duck {

    public function __construct(protected Turkey $turkey){}

    public function quack() {
        $this->turkey->gobble();
    }

    public function fly() {
        for ($i = 0; $i < 5; $i++){
            $this->turkey->fly();
        }
    }

}   


?>
