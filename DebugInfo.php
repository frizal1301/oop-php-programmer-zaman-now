<?php

// var_dump termasuk function yang memanggil __debugInfo
// __debugInfo digunakan jika kita ingin mengubah pesan di debugInfo

require_once 'import/Mahasiswa.php';

$obj1 = new Mahasiswa;
$obj1->nama = "Ical";
$obj1->setAge(19);
$obj1->nim = 1929140005;
var_dump($obj1);