<?php

// To String adalah magic function yang digunakan untuk representasi string dari sebuah object
require_once 'import/Mahasiswa.php';

$obj1 = new Mahasiswa;
$obj1->nama = "Ical";
$obj1->setAge(19);
$obj1->nim = 1929140005;
echo $obj1;