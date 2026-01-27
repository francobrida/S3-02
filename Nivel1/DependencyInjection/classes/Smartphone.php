<?php
require_once 'CommunicationDevice.php';

class Smartphone implements CommunicationDevice {

    public function __construct(private string $model){}
    public function getModel() : string {return $this->model;}

}
?>