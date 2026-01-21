<?php

class HouseKeys {

    public function __construct(private string $keys){}
    public function getKeys() : string {return $this->keys;}

}
?>