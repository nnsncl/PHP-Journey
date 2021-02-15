<?php

$a = 5;
$b = 4;
$c = 1.2;
$d = '1.234';
$e = 'a1.234';

echo ($a + $b) * $c.'<br>';
echo $a % $c.'<br>';

$a = $a + $b;
$a += $b;
$a ++;

echo $a.'<br>';
echo is_numeric($d).'<br>';
echo is_numeric($e).'<br>';

$convertStrToFloat = (float)$d;
$convertStrToInteger = intval($d);
echo $convertStrToFloat.'<br>';
echo $convertStrToInteger.'<br>';

$largeNum = 123456789.12345;
echo number_format($largeNum, 2, '.', ' ');