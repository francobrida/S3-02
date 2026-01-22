<?php

class CouponManager {

    public function __construct(
        protected CarCouponGenerator $generator,
        protected bool $isHighSeason,
        protected bool $isBigStock
    ){}
    
    public function getCoupon() : string {
        $this->generator->addSeasonDiscount($this->isHighSeason);
        $this->generator->addStockDiscount($this->isBigStock);
        return $this->generator->couponGenerator();
    }

}