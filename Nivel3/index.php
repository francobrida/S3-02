<?php
require_once 'CouponManager.php';
require_once 'CarCouponGenerator.php';
require_once 'BmwCouponGenerator.php';
require_once 'MercedesCouponGenerator.php';

$couponBmw = New CouponManager(New BmwCouponGenerator(), true, false);
echo $couponBmw->getCoupon() . "\n";

$couponMercedes = New CouponManager(New MercedesCouponGenerator(), false, true);
echo $couponMercedes->getCoupon() . "\n";

?>

