<?php

// jika didalam class kita menggunakan dua trait dan trait tersebut memiliki function dengan nama yang sama maka akan terjadi collision/conflict
// untuk mengatasinya kita dapat menggunakan kata kunci insteadof
trait A {
    function doA() {
        echo  'a';
    }
    function doB() {
        echo  'b';
    }
}

trait B {
    function doA() {
        echo  'A';
    }
    function doB() {
        echo  'B';
    }
}

class Person {
    use A, B {
        // utamakan function doA didalam trait A dibandingkan di trait B
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$obj1 = new Person;
$obj1->doA();
echo PHP_EOL;
$obj1->doB();