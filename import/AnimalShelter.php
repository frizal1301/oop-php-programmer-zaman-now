<?php
require_once 'animal.php';
use Data\Import\{Animal, Lion};

interface AnimalShelter {
    public function adopt(string $name, int $age) : Animal;
}





