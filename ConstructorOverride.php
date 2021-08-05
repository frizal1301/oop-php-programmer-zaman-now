<?php

require_once 'import/animal.php';
use Data\Import\Lion as Singa;

$hewan = new Singa('Robby', 13);
$hewan->sayHello();