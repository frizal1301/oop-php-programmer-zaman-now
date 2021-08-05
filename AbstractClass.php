<?php

// Abstract class adalah class yang tidak dapat diinstansiasi secara langsung
// Untuk dapat mengaksesnya kita harus menggunakan kelas turunannya
require 'import/car.php';
use Data\{Car, Toyota, Suzuki};

// $car = new Car(); // error karena class tersebut class abstract
$toyota = new Toyota;