<?php
namespace Data\Traits;
trait sayHello {
    function sayHello($name) {
        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait sayGoodbye {
    function sayGoodby($name) {
        if(is_null($name)) {
            echo "Goodbye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}