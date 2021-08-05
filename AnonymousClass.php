<?php

// Anonymous class atau class tanpa nama adalah kemampuan untuk mendeklarasikan class sekaligus menginstasiasinya
// Biasanya digunakan untuk membuat program sederhana

abstract class Person {
    abstract function Hello();
}

$frizal =  new class("Fahru Rizal") extends Person {
    public string $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function Hello() {
        echo "Hello $this->name";
    }
};

$frizal->Hello();