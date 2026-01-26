<?php

Interface CarCouponGenerator {
    public function cleanDiscount() :void;
    public function addSeasonDiscount(bool $isHighSeason): void;
    public function addStockDiscount(bool $isBigStock) : void;
    public function couponGenerator(): string; 
}

?>