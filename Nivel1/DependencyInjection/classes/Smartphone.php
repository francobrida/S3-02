<?php

class Smartphone {

    public function __construct(private string $model){}
    public function getModel() : string {return $this->model;}


}
?>