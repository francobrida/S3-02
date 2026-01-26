<?php

class AutomaticDishWasher {

    public function __construct(
        protected Grabber $firstModule,
        protected Soaper $secondModule,
        protected Rinser $thirdModule,
        protected Placer $fourthModule
    ){}

    public function putTablet() {
        echo "I'm putting a washing tablet.\n";
    }

    public function pressOn() {
        echo "I'm pressing the ON button.\n";
        $this->firstModule->takePiece();
        $this->secondModule->soap();
        $this->thirdModule->rinse();
        $this->fourthModule->placeInDryer();
    }

}
?>
