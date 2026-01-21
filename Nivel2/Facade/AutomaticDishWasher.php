<?php

class AutomaticDishWasher {

    public function __construct(
        protected DishWasher $dishwasher
    ){}

    public function putTablet() {
        echo "I'm putting a washing tablet.\n";
    }

    public function pressOn() {
        $this->dishwasher->takePiece();
        $this->dishwasher->soap();
        $this->dishwasher->rinse();
        $this->dishwasher->placeInDryer();
    }

}
?>
