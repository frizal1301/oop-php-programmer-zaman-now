<?php

// Kadang kita ingin menduplikasi sebuah object
// Untuk melakukan hal tersebut kita bisa menggunakan keyword clone
// keyword clone ini dapat kita gunakan untuk menduplikasi nilai properties dari object
require_once 'import/Mahasiswa.php';
$obj1 = new Mahasiswa();
$obj1->nama = "Fahru Rizal";
$obj1->nim = 1929140005;
$obj1->setAge(19);

var_dump($obj1);
// cara manual clone
// $obj2 = new Mahasiswa();
// $obj2->nama = "Fahru Rizal";
// $obj2->nim = 1929140005;
// $obj2->setAge(19);

// cara otomatis
$obj2 = clone $obj1;
var_dump($obj2);
// jika kita hanya ingin menduplikasi beberapa properties sj maka kita bisa menggunakan function __clone
// function ini akan dipnaggil di object hasil duplikasi setelah proses duplikasi selesai
// urutan eksekusi $obj2->clone => function __clone
