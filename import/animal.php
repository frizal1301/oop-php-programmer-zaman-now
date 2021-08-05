<?php
namespace Data\Import;

class Animal { 
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello Nama Saya $this->name" . PHP_EOL;
    }

    public function getAge() : int {
        return 1;
    }
}

class Lion extends Animal {
    public int $age;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name);
        $this->age = $age;
    }
    public function sayHello()
    {
        echo "Hello Nama Saya $this->name. Saya adalah seekor Singa Saya berumur " . $this->age . PHP_EOL;
    }

    public function getAge() : int {
        return 2;
    }

    public function getParentAge() : void {
        echo "Parent age mereturn nilai " . parent::getAge() . PHP_EOL;
    }
}