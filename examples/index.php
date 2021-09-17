<?php
include __DIR__ . '/../autoload.php';

use lyhiving\address\address;
$address = new address();

$string = '深圳市龙华区龙华街道1980科技文化产业园3栋317    张三    13800138000 518000 120113196808214821';
$r = $address->smart($string);
print_r($r);

$r2 = $address->smart($string, false);
print_r($r2);

