<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../helpers.php';

use DesignPatterns\Creational\Factory\SimpleFactory\AutomobileFactory;

const HB20 = 'HBTwenty';
const GOL = 'gol';
const ONIX = 'onix';

try {
    $car = AutomobileFactory::create(ONIX);
    output('Car name: ' . $car->name . ', Cart brand: ' . $car->brand . ' Action: ' . $car->run());
} catch (\Exception $e) {
    output('Error: ' . $e->getMessage());
}