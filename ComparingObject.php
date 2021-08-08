<?php

// Untuk membandingkan object kita dapat menggunakan operator ==(equal) atau ===(identity)
// operator == akan menghasilkan nilai true jika semua data dari properties itu sama
// operator === menghasilkan nilai true jika object yang digunakan sama
require_once 'import/Mahasiswa.php';
$obj1 = new Mahasiswa();
$obj1->nama = "Fahru Rizal";
$obj1->nim = 1929140005;
$obj1->setAge(19);

$obj2 = new Mahasiswa();
$obj2->nama = "Fahru Rizal";
$obj2->nim = 1929140005;
$obj2->setAge(19);

// menghasilkan nilai true karena semua nilai pada property sama
var_dump($obj1 == $obj2);

// menghasilkan nilai false karena $obj1 dan $obj2 bukan dari object yang sama
var_dump($obj1 === $obj2);

// menghasilkan nilai true karena $obj1 dibandingkan dengan object sendirinya
var_dump($obj1 === $obj1);