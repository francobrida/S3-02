<?php

class CouponManager {

    public function __construct(
        protected CarCouponGenerator $generator,
        protected bool $isHighSeason,
        protected bool $isBigStock
    ){}

    public function setGenerator(CarCouponGenerator $newGenerator) : void {
        $this->generator = $newGenerator;
    }
    
    public function setHighSeason(bool $highSeason) : void {
        $this->isHighSeason = $highSeason;
    }

    public function setBigStock(bool $bigStock) : void {
        $this->isBigStock = $bigStock;
    }

    public function getCoupon() : string {
        $this->generator->cleanDiscount();
        $this->generator->addSeasonDiscount($this->isHighSeason);
        $this->generator->addStockDiscount($this->isBigStock);
        return $this->generator->couponGenerator();
    }

}