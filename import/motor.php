<?php
namespace Data;
// child class pada php hanya bisa punya 1 class parent
// berbeda dengan interface, dengan interface kita dapat mengimplements lebih dari 1 interface

interface hasBrand {
    function getBrand(): string;
}

interface isMaintenance {
    function isMaintenance(): bool;
}

interface Motorcycle extends hasBrand {
    function ride() :void;
    function getSpeed() :int;
}

class Vega implements Motorcycle, isMaintenance {
    function ride() : void 
    {
        echo 'Motor ini bernama Vega ZR';
    }

    function getSpeed(): int
    {
        return 125;    
    }

    function getBrand(): string {
        return 'Yamaha';
    }

    function isMaintenance(): bool
    {
        return false;
    }
}

class Beat implements Motorcycle {
    function ride() : void 
    {
        echo 'Motor ini bernama Beat';
    }

    function getSpeed(): int
    {
        return 100;    
    }

    function getBrand(): string {
        return 'Honda';
    }
}

class Motor {
    public Motorcycle $motor;
}