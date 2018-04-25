<?php
require __DIR__ . '/../vendor/autoload.php';

use FunctionalExample\Fruits;

$count  = function () {
    echo count($this->content), PHP_EOL;
};

$fruits = new Fruits(['apple', 'banana', 'orange']);
$count->call($fruits);

$fruits = new Fruits(['apple', 'banana', 'orange', 'watermelon']);
$count->call($fruits);
