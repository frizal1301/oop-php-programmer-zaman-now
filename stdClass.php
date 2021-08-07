<?php

// stdClass adalah class kosong bawaan dari hp
// stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi object

$family = [
    'first_child' => 'Ical', 
    'father' => 'Mahasiswa', 
    'mother' => 'Caya', 
    'second_child' => 'Imma'
];

$familyObject = (object) $family;

var_dump($familyObject);
echo $familyObject->first_child;

$ArrayFamily = (array) $familyObject;
var_dump($ArrayFamily);