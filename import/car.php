<?php

namespace Data;

abstract class Car {
    public int $tingkat;

    abstract function kecepatan();
}

class Toyota extends Car {
    function kecepatan()
    {
        echo "Mobil Toyota ini Memiliki Kecepatan $this->tingkat Km/H";
    }
}

class Suzuki extends Car {
    function kecepatan()
    {
        echo "Mobil Suzuki ini Memiliki Kecepatan $this->tingkat Km/H";
    }
}