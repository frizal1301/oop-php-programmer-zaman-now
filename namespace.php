<?php

require_once 'import/conflict.php';

// use Data\One\Conflict as conflict1;
// use Data\Two\Conflict as conflict2;
// dengan menggunakan satu perintah use
use Data\{One\Conflict as conflict1, Two\Conflict as conflict2};
// untuk menggunakan namespace kita dapat menggunakan keyword use 
// apabila terdapat nama kelas yang sama maka kita dapat menggunakan keyword as atau nama alias
$obj1 = new conflict1;
$obj1->info();

$obj2 = new conflict2;
$obj2->info();
