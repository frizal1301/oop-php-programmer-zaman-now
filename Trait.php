<?php

// Trait mirip dengan abstract class, kita bisa membuat abstract function atau konkrit function
// Perbedaannya trait bisa kita tambahkan beberapa trait kedalam satu class
// Trait digunakan untuk menyimpan function-function yang bisa digunakan untuk menyimpan ulang dibeberapa class
require_once 'import/Person.php';

use Data\Traits\{sayGoodbye, sayHello};

class ParentPerson {
    function sayHello($name) {
        echo 'sayHello didalam Parent';
    }
}
class Person extends ParentPerson {
    use sayHello, sayGoodbye {
        // merubah visibility dari functionyang ada di trait
        // sayHello as private;
    } 
    // override function yang ada ditrait
    // function sayHello() {
    //     echo "sayHello didalam class Person";
    // }
}

// parent class override by function di trait override by child class

$obj1 = new Person;
$obj1->sayHello('Ical');
echo PHP_EOL;
$obj1->sayGoodby('Ical');