<?php
$input = ['apple', 'banana', 'orange', 'raspberry'];

// basic functional in PHP
$lengths  = array_map(function ($fruit) {
    return strlen($fruit);
}, $input);
$filtered = array_filter($lengths, function ($length) {
    return $length > 5;
});
$sum = array_reduce($filtered, function ($a, $b) {
    return $a + $b;
});

echo "Sum: ", $sum, PHP_EOL;

// shorter functional in PHP
$sum = array_reduce(array_filter(array_map(function ($fruit) {
    return strlen($fruit);
}, $input), function ($length) {
    return $length > 5;
}), function ($a, $b) {
    return $a + $b;
});

echo "Sum: ", $sum, PHP_EOL;
