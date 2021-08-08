<?php

// Invoke itu adalah magic function yang digunakan apabila kita ingin mengakses object sama dengan function variabel
// Invoke function yang dieksekusi ketika object yang kita buat dianggap sebagai function
require_once 'import/Mahasiswa.php';

$obj1 = new Mahasiswa;
$obj1->nama = "Ical";
$obj1->setAge(19);
$obj1->nim = 1929140005;
// jika invoke tidak diinisialisasi di classnya maka akan terjadi error 
$obj1(19);