<?php
// Class ini adalah class yang tidak memiliki properties dan dapat digunakan untuk membuat properties atau function dengan cara dinamis
class ZeroProperties {
    private array $properties = array();
// __get dieksekusi jika kita ingin mengakses property yang tidak ada
    public function __get($name) {
        // echo "Properties $name ingin diakses" . PHP_EOL;
        return $this->properties[$name];
    }
// __set dieksekusi jika kita ingin mengubah property yang tidak ada
    public function __set($name, $value) {
        // echo "Properties $name ingin diset dengan value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }
// __isset : bool dieksekusi jika kita ingin mengecek property yang tidak ada
    public function __isset($name) : bool {
        // echo "Properties $name tidak terset" . PHP_EOL; 
        return isset($this->properties[$name]);
    }
// __unset dieksekusi jika kita ingi menggunakan unset pada property yang tidak ada
    public function __unset($name) {
        // echo "Properties $name memang tidak terset" . PHP_EOL;
        unset($this->properties[$name]);
    }
// __call dieksekusi jika kita ingin mengakses function yang tidak ada
    public function __call($name, $arguments) {
        $join = join(', ', $arguments);
        echo "Memanggil Function $name dengan Arguments $join". PHP_EOL;
    }
// __callStatic dieksekusi jika kita ingin mengakses function static yang tidak ada
    public static function __callStatic($name, $arguments) {
        $join = join(', ', $arguments);
        echo "Memanggil Function Static $name dengan Arguments $join" . PHP_EOL; 
    }


}

$obj = new ZeroProperties();
$obj->coba("Ical", "Makan", "Roti");
ZeroProperties::ical("Coba", "Lagi", "Static");


