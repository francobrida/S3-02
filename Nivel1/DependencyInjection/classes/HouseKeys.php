<?php
require_once 'AccessTool.php';

class HouseKeys implements AccessTool {

    public function __construct(private string $keys){}
    public function getKeys() : string {return $this->keys;}

}
?>