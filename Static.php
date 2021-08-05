<?php

// Static adalah keyword yang dapat kita gunakan unutk membuat properties atau function di dalam class agar bisa diakses secara langsung tanpa menginstasiasi class terlebih dahulu
// Jika kita telah meng-set keyword static maka kita tidak bisa lagi mengakses variabel dengan menggunakan object

require_once 'helper/Sum.php';

use Helper\Sum;
// karena function tambah adalah static maka kita mengaksesnya hanya dengan menggunakan namaClass::namaMethod
echo Sum::tambah(10, 10, 10, 15);