<?php

// Abstract function adalah function  yang harus dioverride oleh kelas turunannya
// access modifier tidak boleh private
require 'import/car.php';
use Data\{Car, Toyota, Suzuki};

// $car = new Car(); // error karena class tersebut class abstract
$toyota = new Toyota;
$toyota->tingkat = 300;
$toyota->kecepatan();
echo PHP_EOL;
$suzuki = new Suzuki;
$suzuki->tingkat = 500;
$suzuki->kecepatan();