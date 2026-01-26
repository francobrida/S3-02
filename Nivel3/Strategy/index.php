<?php
require_once 'CouponManager.php';
require_once 'CarCouponGenerator.php';
require_once 'BmwCouponGenerator.php';
require_once 'MercedesCouponGenerator.php';

$coupon = New CouponManager(New BmwCouponGenerator(), true, false);
echo $coupon->getCoupon() . "\n";

$coupon->setGenerator(New MercedesCouponGenerator(), false, true);
echo $coupon->getCoupon() . "\n";

?>

