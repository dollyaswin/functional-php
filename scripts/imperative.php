<?php
$input = ['apple', 'banana', 'orange', 'raspberry'];
$sum   = 0;
foreach ($input as $fruit) {
    $length = strlen($fruit);
    if ($length > 5) {
        $sum += $length;
    }
}

echo "Sum: ", $sum, PHP_EOL;
