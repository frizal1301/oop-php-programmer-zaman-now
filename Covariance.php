<?php
require_once 'import/AnimalShelter.php';
require_once 'import/animal.php';
use Data\Import\{Animal, Lion};
// PHP Memungkinkna kita mengoverridde function yang diparent dengan return value yang lebih spesifik
class lionShelter {
    // biasanya kita akan membuat function dengan return value yang sama. berbeda dengan php kita dapat melakukan covariance yang memungkinkan kita mereturn value yang lebih spesifik
    public function adopt(string $name, int $age) : Lion {
        $lion = new Lion($name, $age);
        
        return $lion;
    }
}

$LionShelter = new lionShelter();
$LionShelter1 = $LionShelter->adopt("Rizal", 19);
$LionShelter1->sayHello();