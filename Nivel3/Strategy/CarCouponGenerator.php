<?php

Interface CarCouponGenerator {

    public function couponGenerator(): string; 
    public function addSeasonDiscount(bool $isHighSeason): void;
    public function addStockDiscount(bool $isBigStock) : void;
}

?>