<?php

// saat membuat object properties otomatis dibuat per-object
// berbeda dengan constant constat di class hidupnya diclass bukan diobject
// untuk mengakses constant kita dapat menggunakan namaclass::constant atau jika kita ingin mengaksesnya didalam class itu sendiri kita dapat menggunakan self::constant

class Person {
    const name = "Ical";

    function info() {
        echo "Nama saya : ". self::name;
    }
}

$obj1 = new Person;

$obj1->info();