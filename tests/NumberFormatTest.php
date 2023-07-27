<?php
require __DIR__ . '/../vendor/autoload.php';
// namespace numberFormat;
// use \numberFormat\NumberFormat;

$number = '102400010';
echo numberFormat\NumberFormat::byte_format($number);