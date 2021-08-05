<?php

// interface sama dengan abstract class yaitu sebagai kontrak ke class childnya
// berbeda dengan abstract class interface tidak boleh memiliki properties hanya boleh constant
// diinterface semua method adalah method abstract
require_once 'import/motor.php';

use Data\{Motorcycle, Vega, Beat, Motor};

$obj1 = new Motor;

$obj1->motor = new Beat();
$obj1->motor->ride();
echo PHP_EOL;
$obj1->motor = new Vega();
$obj1->motor->ride();