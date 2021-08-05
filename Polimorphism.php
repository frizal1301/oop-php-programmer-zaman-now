<?php
require 'import/programmer.php';
// Polimorphism berasal dari kata yunani yang berarti banyak bentuk
// Berkaitan dengan kemampuan object berubah bentuk menjadi bentuk lain

// Membuat Object dari Class Programmer dengan Menggunakan Class Polimorphism
$obj1 = new Polimorphism;
$obj1->programmer = new Programmer;
$obj1->programmer->info();
$obj1->programmer = new BackendProgrammer;
$obj1->programmer->info();
$obj1->programmer = new FrontEndProgrammer;
$obj1->programmer->info();

SayHello(new BackendProgrammer);
SayHello(new FrontEndProgrammer);
SayHello(new Programmer);