<?php 

class Mahasiswa {
    public string $nama;
    public int $nim;
    protected int $age;

    public function setAge($age) : void {
        $this->age = $age;
    }

    public function __clone()
    {
        unset($this->age);
    }

    public function __toString() {
        return "name: $this->nama age: $this->age nim: $this->nim";
    }

    public function __invoke(...$arguments) {
        if(sizeof($arguments) == 0) {
            echo "Invoke Function with no Arguments";
        } else {
            $join = join(',', $arguments);
            echo "Invoke Function with Arguments $join";
        }
    }

    public function __debugInfo() : array{
        return [
            "nim" => $this->nim,
            "name" => $this->nama 
        ];
    }
}