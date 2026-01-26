<?php

class MercedesCouponGenerator implements CarCouponGenerator {

    private int $discount = 0;

     public function cleanDiscount(): void {
        $this->discount = 0;
    }
    public function addSeasonDiscount(bool $isHighSeason): void {
        if ($isHighSeason){$this->discount += 4;}
    }
    public function addStockDiscount(bool $isBigStock) : void{
       if ($isBigStock) {$this->discount += 10;} 
    }
    
    public function couponGenerator(): string {
        return "Get {$this->discount}% off the price of your new car.";
    }

}