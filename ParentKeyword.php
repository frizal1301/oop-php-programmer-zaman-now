<?php

// terkadang kita ingin mengakses function yang ada diparent
// kata kunci yang dapat kita gunakan adalah parent::nama_function
// parent digunakan untuk mengakses class parent
require_once 'import/animal.php';

use Data\Import\{Animal as hewan, Lion as singa};

// $obj = new singa('King');

// echo $obj->getAge() . PHP_EOL;
// $obj->getParentAge();

