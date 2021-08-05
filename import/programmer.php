<?php

class Programmer {
    function info() {
        echo 'Saya adalah seorang Programmer' . PHP_EOL;
    }
}

class BackendProgrammer extends Programmer {
    function info() {
        echo 'Saya adalah seorang Programmer khususnya dirole Back-end' . PHP_EOL;
    }
}

class FrontEndProgrammer extends Programmer {
    function info() {
        echo 'Saya adalah seorang Programmer khususnya dirole Front-end' . PHP_EOL;
    }   
}

class Polimorphism {
    public Programmer $programmer;
}

function SayHello(Programmer $programmer) {
    // untuk mengecek object yang diinstansiasi
    // jika object yang diinstansiasi dari $programmer adalah BackendProgrammer
    if($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer" . PHP_EOL;
    } else if($programmer instanceof FrontEndProgrammer) {
        echo "Hello Frontend Programmer" . PHP_EOL;
    } else if($programmer instanceof Programmer) {
        echo "Hello Programmer" . PHP_EOL;
    }

}