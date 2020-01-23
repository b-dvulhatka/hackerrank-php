<?php

$handle = fopen('php://stdin', 'r');
$i = 4; //integer
$d = 4.0; // double
$s = "HackerRank "; // String

fscanf($handle, "%[^\n]", $integer);
fscanf($handle, "%[^\n]", $double);
fscanf($handle, "%[^\n]", $string);

print_r($i + $integer . PHP_EOL);
print_r(number_format($d + $double, 1, '.', '') . PHP_EOL);
print_r($s . $string . PHP_EOL);


fclose($handle);