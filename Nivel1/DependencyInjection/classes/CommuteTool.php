<?php

class CommuteTool {

    public function __construct(private CommuteType $type){}
    public function getType() : CommuteType {return $this->type;}

}
?>