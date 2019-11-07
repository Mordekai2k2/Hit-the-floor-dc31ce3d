<?php
// Input
$boomer = intval ($argv[1]);
var_dump($boomer);

// 50 bucks
$fiftybuckz = floor ($boomer / 50);
echo "$fiftybuckz x €50,-" . PHP_EOL;
$restfifty = $boomer % 50;

// 20 bucks
$twentybuckz = floor ($restfifty / 20);
echo "$twentybuckz x €20,-" . PHP_EOL;
$resttwenty = $restfifty % 20;

// 10 bucks
$tenbuckz = floor ($resttwenty / 10);
echo "$tenbuckz x €10,-" . PHP_EOL;
$restten = $resttwenty % 10;

// 5 bucks
$fivebuckz = floor ($restten / 5);
echo "$fivebuckz x €5,-" . PHP_EOL;
$restfive = $restten % 5;

// 2 bucks
$twobuckz = floor ($restfive / 2);
echo "$twobuckz x €2,-" . PHP_EOL;
$resttwo = $restfive % 2;

// 1 buck
$onebuck = floor ($resttwo / 1);
echo "$onebuck x €1,-" . PHP_EOL;
