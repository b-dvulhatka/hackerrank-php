<?php

$_fp = fopen('php://stdin', 'r');

$inputString = fgets($_fp); // input pego do stdin e salvo na variável

// primeira linha output aqui
print('Hello, World.' . PHP_EOL);

print($inputString);
// escrever segunda linha de código

fclose($_fp);