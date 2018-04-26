<?php
require __DIR__ . '/../vendor/autoload.php';

use FunctionalExample\Observable;
use FunctionalExample\Observer;

$subject1  = new Observable();
$observer1 = new Observer($subject1);
$observer2 = new Observer($subject1);
$subject1->broadcast('Hello', 'world');

$subject2  = new Observable();
$observer3 = new Observer($subject2);
$observer4 = new Observer($subject2);
$subject1->broadcast('Hello', 'guys');
